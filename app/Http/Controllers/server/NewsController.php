<?php

namespace App\Http\Controllers\server;
use App\Contact;
use App\NewsFeed;
use App\Slide;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends ServerController
{

    public function addNews(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('newsData',NewsFeed::orderBy('id', 'DESC')->get());
            $this->data('userData',User::all());
            $this->data('title',$this->title('add News Details'));
            return view($this->pagePath.'addNews',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'news_title' => 'required',
                'news_photo' => 'required',
                'news_description' => 'required',

            ]);
            


            if (($request->hasFile('news_photo'))) {
                $image = $request->file('news_photo');
                $ext = $image->getClientOriginalExtension();

                $imageName = (microtime()) . '.' . $ext;
                $uploadPath = public_path('images/news/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['news_photo'] = $imageName;
                }
            }

            $data['news_title'] = $request->news_title;
            $data['news_description'] = $request->news_description;
            $data['user_id'] = $request->user_id;
            
                    if (NewsFeed::create($data)) {
                return redirect()->route('addNews')->with('success', 'News was inserted successfully');
            }

        }

    }

    public function editNews($id)
    {
        $this->data('userData', User::all());
        $this->data('updateNewsData',NewsFeed::findOrFail($id));
        return view($this->pagePath.'editNews',$this->data);
    }

    public function updateNews(Request $request, $id)
    {
        $News = NewsFeed::findOrFail($id);
        $News->user_id = \request('user_id');
        $News->news_title = \request('news_title');
        $News->news_description = \request('news_description');

        if($request->hasFile('news_photo')){
            if (is_file($News->news_photo) && file_exists($News->news_photo)){
                unlink($News->news_photo);
            }
            $filename = time().'.'.request()->file('news_photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('news_photo')->move('public/images/news/',$filename);
            $News->news_photo =$filename;
        }
        $News->save();
        return redirect()->route('addNews')->with('success', 'Record Updated');
    }


    public function destroy($id)
    {
        $addNews = NewsFeed::findOrFail($id);

        $addNews->delete();

        return redirect()->route('addNews')->with('success', 'Record Deleted');

    }

}

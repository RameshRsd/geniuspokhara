<?php

namespace App\Http\Controllers\server;

use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends ServerController
{

    public function index()
    {
        $this->data('userData', User::paginate(4));
        $this->data('title', $this->title('users'));
        return view($this->pagePath . 'users', $this->data);

    }

    public function AddUser(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('title', $this->title('User Control'));
            $this->data('userData', User::All());
            return view($this->pagePath . 'addUser', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3',
                'username' => 'required|unique:users,username|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5|confirmed',
                'upload' => 'mimes:jpg,png,jpeg,gif'


            ]);


            if (($request->hasFile('image'))) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/userimages/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }


            }

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if (User::create($data)) {
                $this->data('userData', User::All());
                return redirect()->route('addUser')->with('success', 'User was inserted successfully');
            }

        }

    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
        if(\Illuminate\Support\Facades\Auth::user()){
        return redirect()->intended('admin');}
        else{
            return view($this->pagePath . 'login.login', $this->data);}

        }
        if ($request->isMethod('post')) {
            $userName = $request->username;
            $password = $request->password;
            if (Auth::attempt(['username' => $userName, 'password' => $password])) {
               return redirect()->intended('admin');
            } else {
                return redirect()->route('login')->with('error','username and password not match');
            }


        }

    }

    public function signup(Request $request)
    {
        if ($request->isMethod('get')) {
        if(\Illuminate\Support\Facades\Auth::user()){
        return redirect()->intended('admin');}
        else{
            return view($this->pagePath . 'login.signup', $this->data);}

        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required|min:3',
                'username' => 'required|unique:users,username|min:3',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:5|confirmed',
                'upload' => 'mimes:jpg,png,jpeg,gif'


            ]);


            if (($request->hasFile('upload'))) {
                $image = $request->file('upload');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/userimages/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }


            }

            $data['name'] = $request->name;
            $data['username'] = $request->username;
            $data['email'] = $request->email;
            $data['password'] = bcrypt($request->password);

            if (User::create($data)) {
                return redirect()->route('login')->with('success', 'Successfully Registered');
            }
        }

    }

    public function editUser($id)
    {
        $this->data('UpdateUserData', User::findOrFail($id));
        return view($this->pagePath.'editUser',$this->data);
    }
    public function updateUser(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->name = \request('name');
        $User->username = \request('username');
        $User->email = \request('email');

        if($request->hasFile('image')){
            if (is_file($User->image) && file_exists($Slide->image)){
                unlink($User->image);
            }
            $filename = time().'.'.request()->file('image')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('image')->move('public/images/userimages/',$filename);
            $User->image =$filename;
        }
        $User->save();
        return redirect()->route('addUser')->with('success', 'Record Updated');
    }
    public function updateUserStatus(Request $request, $id)
    {
        $about = User::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addUser')->with('success', 'User Type Updated');
    }

    public function destroy($id)
    {
        $addUser = User::findOrFail($id);

        $addUser->delete();

        return redirect()->route('addUser')->with('success', 'Record Deleted');

    }

    public function logout(){
       Auth::logout();
       return redirect(url('/'));
    }

}

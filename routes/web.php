<?php

Route::group(['namespace'=>'client'],function (){
   Route::any('/','ApplicationController@index');
    Route::any('contact','ApplicationController@contact')->name('contact');
    Route::any('Gallery','ApplicationController@Gallery')->name('Gallery');
    Route::any('Search','ApplicationController@Search')->name('Search');
    Route::any('About','ApplicationController@About')->name('About');
    Route::any('Profile','ApplicationController@Profile')->name('Profile');
    Route::any('application_form','ApplicationController@application')->name('application_form');
    Route::get('NewsFeed/{id}/NewsDetails','ApplicationController@NewsDetails')->name('NewsDetails');
    Route::any('OnGoingProject','ApplicationController@OnGoingProject')->name('OnGoingProject');
    Route::any('CompletedProject','ApplicationController@CompletedProject')->name('CompletedProject');
});


Route::group(['namespace'=>'server'],function (){
    Route::any('login','UserController@login')->name('login');
    Route::any('signup','UserController@signup')->name('signup');
    Route::get('addAbout/{id}/editMission','FrontMenuController@editMission')->name('editMission');
    Route::post('addAbout/{id}/editMission','FrontMenuController@updateMission');

    Route::get('addAbout/{id}/editIntro','FrontMenuController@editIntro')->name('editIntro');
    Route::post('addAbout/{id}/editIntro','FrontMenuController@updateIntro');

    Route::get('addSlide/{id}/editSlide','SlideController@editSlide')->name('editSlide');
    Route::post('addSlide/{id}/editSlide','SlideController@updateSlide');
    Route::get('addSlide/delete/{id}','SlideController@destroy');

    Route::get('addTraining/delete/{id}','TrainingsController@destroy');

    Route::get('addNews/delete/{id}','NewsController@destroy');
    Route::get('addNews/{id}/editNews','NewsController@editNews')->name('editNews');
    Route::post('addNews/{id}/editNews','NewsController@updateNews');

    Route::get('addUser/{id}/editUser','UserController@editUser')->name('editUser');
    Route::post('addUser/{id}/editUser','UserController@updateUser');
    Route::get('addUser/delete/{id}','UserController@destroy');
    Route::post('addUser/{id}/updateUserStatus','UserController@updateUserStatus');

    Route::get('viewApplication/{id}/viewApplicationDetails','EnrollController@viewApplicationDetails')->name('viewApplicationDetails');
    Route::get('viewApplication/delete/{id}','EnrollController@destroy');

    Route::get('addProject/delete/{id}','ProjectController@destroy');
    Route::get('addProject/{id}/editProject','ProjectController@editProject')->name('editProject');
    Route::post('addProject/{id}/editProject','ProjectController@updateProject');
    Route::post('addProject/{id}/updateProjectStatus','ProjectController@updateProjectStatus');
    
    Route::get('addProgram/delete/{id}','ProgramController@destroy');
    Route::get('addProgram/{id}/editProgram','ProgramController@editProgram')->name('editProgram');
    Route::post('addProgram/{id}/editProgram','ProgramController@updateProgram');
});
Route::group(['namespace'=>'server','prefix'=>'admin','middleware'=>'auth'],function (){
    Route::any('/','DashboardController@index')->name('admin');

    Route::group(['prefix'=>'User-Control','middleware'=>'status'],function (){
       Route::any('/','UserController@index')->name('users');
        Route::any('addUser','UserController@addUser')->name('addUser');
        Route::any('updateUser','UserController@updateUser')->name('updateUser');
    });

    Route::group(['prefix'=>'slide'],function (){

        Route::any('addSlide','SlideController@addSlide')->name('addSlide');

    });
    Route::group(['prefix'=>'Program'],function (){

        Route::any('addProgram','ProgramController@addProgram')->name('addProgram');

    });
    
    
    Route::group(['prefix'=>'Front-Menu'],function (){

        Route::any('addAbout','FrontMenuController@addAbout')->name('addAbout');
        Route::any('addProject','ProjectController@addProject')->name('addProject');

    });
    Route::group(['prefix'=>'News'],function (){

        Route::any('addNews','NewsController@addNews')->name('addNews');
    });
    Route::group(['prefix'=>'Trainings'],function (){

        Route::any('addTraining','TrainingsController@addTraining')->name('addTraining');
    });
    Route::group(['prefix'=>'Enrollment'],function (){

        Route::any('viewApplication','EnrollController@viewApplication')->name('viewApplication');
    });

    Route::group(['prefix'=>'legalStatus'],function (){

        Route::any('legalStatus','legalStatusController@legalStatus')->name('legalStatus');
    });
    Route::group(['prefix'=>'JobApplicaton'],function (){

        Route::any('viewJobApplication','JobApplicationController@viewJobApplication')->name('viewJobApplication');
    });
    Route::group(['prefix'=>'viewJobDemand'],function (){

        Route::any('viewJobDemand','JobDemandController@viewJobDemand')->name('viewJobDemand');
    });
    Route::group(['prefix'=>'Contact'],function (){

        Route::any('viewContact','ContactController@viewContact')->name('viewContact');

    });
    Route::group(['prefix'=>'Report'],function (){

        Route::any('TrainingReport','ReportController@Report')->name('TrainingReport');
        Route::any('eventReport','ReportController@eventReport')->name('eventReport');
        Route::any('tradeReport','ReportController@tradeReport')->name('tradeReport');
        Route::any('venueReport','ReportController@venueReport')->name('venueReport');
    });
    Route::group(['prefix'=>'trainee'],function (){

        Route::any('addTrainee','TraineeController@addTrainee')->name('addTrainee');
        Route::any('viewTrainee','TraineeController@viewTrainee')->name('viewTrainee');
        Route::any('searchEvent','TraineeController@searchEvent')->name('searchEvent');
        Route::any('TraineeReport','TraineeController@searchEvent')->name('TraineeReport');
//        Route::post('searchData','DashboardController@searchData')->name('searchEvent');
//      Route::get('searchEvent','DashboardController@searchEvent')->name('searchEvent');

    });
    Route::any('logout','UserController@logout')->name('logout');

});
<?php

Route::group(['middleware' => 'web'], function ()
{
    Route::auth();
    Route::get('/',['as' => 'home','uses' => 'HomeController@home']);
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@dashboard']);
    Route::get('resume/{id?}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id?}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('store_resume_name',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::get('resume/{id?}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
    Route::get('resume/{id?}/show',['as' => 'resume.show','uses' => 'ResumeController@show']);

    Route::get('auth/github','Auth\AuthController@redirectGithub');
    Route::get('auth/github/callback','Auth\AuthController@githubCallback');
    Route::get('auth/fb','Auth\AuthController@redirectFb');
    Route::get('auth/fb/callback','Auth\AuthController@FbCallback');

    Route::get('resume/{section_id}/{resume_id}/addSection',['as' => 'resume.addSection','uses' => 'ResumeController@addSection']);
    Route::get('resume/{mapping_section_id}/{subsection_id}/addSubsection',['as' => 'resume.addSubsection','uses' => 'ResumeController@addSubsection']);
    Route::get('resume/{mapping_section_id}/{resume_id}/deleteSection',['as' => 'resume.deleteSection','uses' => 'ResumeController@deleteSection']);
    Route::get('resume/{mapping_subsection_id}/{resume_id}/deleteSubsection',['as' => 'resume.deleteSubsection','uses' => 'ResumeController@deleteSubsection']);
//    Route::get('/pdf', function(){
//        $pdf = PDF::loadHTML('<h1>Test</h1>');
//        return $pdf->stream();
//    });
    Route::get('resume/{id?}/generatePDF',['as' => 'resume.download','uses' => 'ResumeController@generatePDF']);

    Route::post('resume/{id}/addNewSection',['as' => 'resume.addNewSection','uses' => 'ResumeController@addNewSection']);
});

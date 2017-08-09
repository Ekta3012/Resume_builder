<?php

Route::group(['middleware' => 'web'], function ()
{
    // Authentication routes
    Route::auth();

    Route::get('/login',function() {
      return redirect()->route('home');
    });

    Route::get('/register',function() {
      return redirect()->route('home');
    });

    Route::get('/home',function() {
      return redirect()->route('home');
    });

    // Home page route
    Route::get('/',['as' => 'home','uses' => 'HomeController@home']);

    // Dashboard route after login
    Route::get('dashboard',['as' => 'user.dashboard','uses' => 'UserController@dashboard']);

    // Resume routes for creating, editing, and deleting
    Route::get('resume/{id?}',['as' => 'resume.create','uses' => 'ResumeController@create']);
    Route::post('resume/{id?}',['as' => 'resume.store','uses' => 'ResumeController@store']);
    Route::post('store_resume_name',['as' => 'resume.name','uses' => 'ResumeController@store_resume_name']);
    Route::delete('resume/{id?}/delete',['as' => 'resume.delete','uses' => 'ResumeController@delete']);
    Route::get('resume/{id?}/show/{resume_design}',['as' => 'resume.show','uses' => 'ResumeController@show']);
    Route::get('resume/{id?}/download/{resume_design}',['as' => 'resume.download','uses' => 'ResumeController@download']);

    // Social Routes for github, fb and google
    Route::get('auth/github','ResumeController@redirectGithub');
    Route::get('auth/github/callback','ResumeController@githubCallback');
    Route::get('auth/fb','Auth\AuthController@redirectFB');
    Route::get('auth/fb/callback','Auth\AuthController@FBCallback');
    Route::get('auth/ln','Auth\AuthController@redirectLn');
    Route::get('auth/ln/callback','Auth\AuthController@LnCallback');
    Route::get('auth/google','Auth\AuthController@redirectGoogle');
    Route::get('auth/google/callback','Auth\AuthController@googleCallback');

    // Section and subsection routes for resumes
    Route::post('resume/{section_id}/{resume_id}/addSection',['as' => 'resume.addSection','uses' => 'ResumeController@addSection']);
    Route::post('resume/{mapping_section_id}/{subsection_id}/addSubsection',['as' => 'resume.addSubsection','uses' => 'ResumeController@addSubsection']);
    Route::post('resume/{mapping_section_id}/{resume_id}/deleteSection',['as' => 'resume.deleteSection','uses' => 'ResumeController@deleteSection']);
    Route::post('resume/{mapping_subsection_id}/{resume_id}/deleteSubsection',['as' => 'resume.deleteSubsection','uses' => 'ResumeController@deleteSubsection']);

    Route::post('resume/{id}/newSection',['as' => 'resume.addNewSection','uses' => 'ResumeController@addNewSection']);
    Route::delete('resume/{id}/newSection',['as' => 'resume.deleteNewSection','uses' => 'ResumeController@deleteNewSection']);
    Route::post('resume/{id}/newSubsection',['as' => 'resume.addNewSubsection','uses' => 'ResumeController@addNewSubsection']);
    Route::delete('resume/{id}/newSubsection',['as' => 'resume.deleteNewSubsection','uses' => 'ResumeController@deleteNewSubsection']);
});

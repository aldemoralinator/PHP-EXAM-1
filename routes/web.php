<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'prevent-back-history'], function(){

    Route::get('/', function () {

        return view('welcome');
        
    });

    Auth::routes();
    Route::middleware('auth')->group(function () {

        Route::get(
            '/general-contacts', 
            'GeneralContactsController@index'
        )->name('general_contacts');

        Route::get(
            '/personal-contacts', 
            'PersonalContactsController@index'
        )->name('personal_contacts');

        Route::post(
            '/personal_contacts-add', 
            'PersonalContactsController@store'
        )->name('personal_contacts-add');

    }); 

});
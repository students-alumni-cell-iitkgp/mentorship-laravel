<?php


/*
	'/' redirect to home.blade.php
*/
Route::get('/', function () {
    return view('home');
})->name('login');

Route::get('/mentor_registration','MentorController@create');// opens the registration modal for mentor
Route::post('/mentor_registration','MentorController@store');// store the details in database and logged in the user 
Route::get('/mentee_registration','MenteeController@create');// opens the registration modal for mentee
Route::post('/mentee_registration','MenteeController@store');// store the details in database and logged in the user 
Route::get('/show/{id}','ProfileController@index');// loggin the user after registration
Route::get('/show','ProfileController@show')->name('home');// opens the profile page
Route::post('/show','ProfileController@store');// authenticate the user and loggin the user
Route::get('/logout','ProfileController@destroy');//log out the user

/*
	redirect to faq.blade.php
*/
Route::get('/faq', function () {
    return view('faq');
});

/*
	 redirect to icebreaker.blade.php
*/
Route::get('/icebreaker', function () {
    return view('icebreaker');
});



Route::get('/givepreference','PreferenceController@index');

Route::get('/gpreference','PreferenceController@create');

Route::post('/gpreference','PreferenceController@store');

Route::get('/','PreferenceCodeController@addcode');

Route::get('/fpassword','PreferenceController@fp');

Route::post('/fpassword','PreferenceController@fpstore');

?>

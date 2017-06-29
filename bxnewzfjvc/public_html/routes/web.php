<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Middleware\CheckFirstName;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('testroute','testcontroller@index');

Route::get('form',function() {
	return view('form');

});

Route::post('formsubmit', function() {
	return 'Form posted.';
})->middleware(CheckFirstName::Class);

Route::get('user/{name}',function($name){
	echo "Name is ". $name;
})->where('name','[A-Za-z]+');

Route::get('user/{id}',function($id){
	echo "ID is ".$id;
})->where('id','[0-9]+');

Route::get('user/{id}/{name}',function($id,$name){
	echo "ID is ".$id;
	echo "<br>";
	echo "Name is ".$name;
	
})->where('id','[0-9]+');


Route::get('userList','UserController@index')->middleware(CheckFirstName::Class);

Route::resource('department','DepartmentController');

Route::get('createUser','UserController@create');
Route::get('updateUser/{id}','UserController@update');
Route::get('listUser','UserController@read');
Route::get('deleteUser/{id}','UserController@delete');

// Route::get('login', function () {
//     return view('auth.login');
// });

Route::get('login',array('as'=>'login',function(){
	return view('auth.login');
}));

Route::get('resetPassword/{token}', ['as' => 'resetPassword', function($token)
{
   return View::make('resetPassword')->with('token', $token); 
}]);

Route::resource('employee','EmployeeController');



Route::get('aboutUs', function(){
	return view('aboutUs');
});

//Auth::routes();

 // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');
        //Route::get('register', 'Auth\LoginController@showLoginForm')->name('login');
        //Route::post('register', 'Auth\LoginController@login');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

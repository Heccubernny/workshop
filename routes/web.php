<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/hello', 'UserController@hello');
// Route::view('hello', 'hello');
    

Route::get('hello', function () {
    return view('hello');
});

Route::get('/401', function(){
    
    echo('<script>alert("You are now in the login session!!!")</script>');

    return view('errors.401');
});

// Route::get('/components/alert', function () {
//     return view('components.alert');
// });
// Route::prefix(‘image’)->group(function () {
//     Route::get(‘assets/images/{filename}’,‘ImageController@showHotel9jaImage’);
//     ->name('Hotel9jaImage');
// )};

Route::view('/alert', 'components.alert');

Route::view('/buy-tickets', 'buy-tickets');
Route::view('/contact', 'contact');
Route::view('/about', 'about');
Route::view('/news', 'news');
Route::view('/speakers', 'speakers');
// Route::view('/welcome', 'welcome');
Route::view('/login', 'authentication.login');
Route::view('/register', 'authentication.register');
Route::view('/forgot', 'authentication.forgot_password');
Route::view('/otp', 'otp');
Route::view('/index', 'index');

Route::resource('login', 'RegisterController');

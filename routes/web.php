<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Parser\Multiple;
use App\Mail\FileDownloaded;
use Illuminate\Support\Facades\DB;

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


Route::view('/alert', 'components.alert');

Route::view('/buy-tickets', 'buy-tickets');
Route::get('/contact', 'ContactController@show');
Route::view('/about', 'about');
Route::get('/news', 'NewsController@index');
Route::resource('speakers',  'SpeakerController@index');



// Route::get('/components/alert', function () {
//     return view('components.alert');
// });
// Route::prefix(‘image’)->group(function () {
//     Route::get(‘assets/images/{filename}’,‘ImageController@showHotel9jaImage’);
//     ->name('Hotel9jaImage');
// )};


//Route::view('/speakers', 'speakers');
// Route::get('speakers', function () {
  //  $speaker = DB::table('speakers')->get();
    //return view('speakers', [
       // 'speaker' => $speaker
    //]);
// });

Route::get('speake', 'SpeakerController@program');
// Route::resource('single_speakers/{id}', 'SingleController');
// Route::view('/welcome', 'welcome');
// Route::get('login', function () {
//     return view('authentication.login', compact(['site_name', 'site_description']));

Route::get('register',  'RegisterController@store');

Route::view('/forgot', 'authentication.forgot_password');
Route::view('/otp', 'otp');

Route::post('dashboard');

Route::get('index', function () {
    return view('index');
});

Route::resource('authentication', 'RegisterController');

// Route::resource('index', 'LoginController');

// for file uploads

// Route::post('login', function (Request $request) {
//     $path = $request->file('photo')->store('photos');

//     dd($path);
// });


// Route::post('process', function (Request $request) {
//     // cache the file

    
//     $file = $request->file('photo');

//     // generate a new filename. getClientOriginalExtension() for the file extension
//     $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

//     // save to storage/app/photos as the new $filename
//     $path = $file->storeAs('photos', $filename);

//     dd($path);
// });


// for Multiple upload

// Route::post('index', function (Request $request) {
//     $photos = $request->file('photos');
//     $paths  = [];

//     foreach ($photos as $photo) {
//         $extension = $photo->getClientOriginalExtension();
//         $filename  = 'profile-photo-' . time() . '.' . $extension;
//         $paths[]   = $photo->storeAs('photos', $filename);
//     }

//     dd($paths);
// });


// Route::post('index', function (Request $request) {
//     // validate the uploaded file
//     $validation = $request->validate([
//         'photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
//         // for multiple file uploads
//         // 'photo.*' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048'
//     ]);
//     $file = $validation['photo']; // get the validated file
//     $extension = $file->getClientOriginalExtension();
//     $filename  = 'profile-photo-' . time() . '.' . $extension;
//     $path = $file->storeAs('photos', $filename);
//     $request->file('photo')->store('photos', 's3');
//     dd($path);

// });

// Route::get('mail', function () {
//     $email = '46018609d3-ace66c@inbox.mailtrap.io';

//     Mail::to($email)->send(new FileDownloaded);

//     dd('done');
// });
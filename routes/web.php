<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\EmailLogsController;
use App\Http\Controllers\RepairController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    // return view('welcome');
    return view('home');
})->name('home');
Route::get('/mission', function () {
    // return view('welcome');
    return view('mission');
})->name('mission');
Route::get('/services', function () {
    // return view('welcome');
    return view('services');
})->name('services');
Route::get('/repairs', function () {
    // return view('welcome');
    return view('repairs');
})->name('repairs');
Route::get('/contact-us', function () {
    // return view('welcome');
    return view('contact_us');
})->name('contact_us');
Route::get('/home2', function () {
    // return view('welcome');
    return view('home2');
})->name('home2');

//option 1
Route::get('/option1/home', function () {
    // return view('welcome');
    return view('option1.home');
})->name('option1.home');
Route::get('/option1/mission', function () {
    // return view('welcome');
    return view('option1.mission');
})->name('option1.mission');
Route::get('/option1/services', function () {
    // return view('welcome');
    return view('option1.services');
})->name('option1.services');
Route::get('/option1/repairs', function () {
    // return view('welcome');
    return view('option1.repairs');
})->name('option1.repairs');
Route::get('/option1/contact-us', function () {
    // return view('welcome');
    return view('option1.contact_us');
})->name('option1.contact_us');

//option2
Route::get('/option2', function () {
    // return view('welcome');
    return view('option2.home');
})->name('option2.home');
Route::get('/option2/mission', function () {
    // return view('welcome');
    return view('option2.mission');
})->name('option2.mission');
Route::get('/option2/services', function () {
    // return view('welcome');
    return view('option2.services');
})->name('option2.services');
Route::get('/option2/repairs', function () {
    // return view('welcome');
    return view('option2.repairs');
})->name('option2.repairs');
Route::get('/option2/contact-us', function () {
    // return view('welcome');
    return view('option2.contact_us');
})->name('option2.contact_us');

///option3
Route::get('/option3', function () {
    // return view('welcome');
    return view('option3.home');
})->name('option3.home');
Route::get('/option3/mission', function () {
    // return view('welcome');
    return view('option3.mission');
})->name('option3.mission');
Route::get('/option3/services', function () {
    // return view('welcome');
    return view('option3.services');
})->name('option3.services');
Route::get('/option3/repairs', function () {
    // return view('welcome');
    return view('option3.repairs');
})->name('option3.repairs');
Route::get('/option3/contact-us', function () {
    // return view('welcome');
    return view('option3.contact_us');
})->name('option3.contact_us');

Route::resource('repairs-requests', RepairController::class);
Route::post('/repair-form-img-upload', [RepairController::class, 'imgUpload'])->name('repair-form-img-upload');
Route::post('/repair-image-remove-upload', [RepairController::class, 'removeUploads'])->name('repair-image-remove-upload');
Route::post('/testimonial-data/store', [DefaultController::class, 'testimonial'])->name('testimonial.store');
Route::get('email-test', function () {
    return view('email-template.index');
});

Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [Controller::class,'index'])->name('dashboard');
    Route::get('admin',function(){
        return redirect()->route('dashboard');
    });
    Route::get('/admin/dashboard', [DefaultController::class,'dashboard'])->name('dashboard');
    Route::resource('email-logs', EmailLogsController::class);
    Route::get('/get-emails',[EmailLogsController::class,'getEmails'] )->name('get_emails');
    // Route::get('/get-emails/{id}', 'EmailLogsController@sendMail')->name('send-mail');
    Route::get('/date-range/{date_range}', [EmailLogsController::class,'dateRange'])->name('dateRange');

    Route::get('/adminEdit', [DefaultController::class,'adminEdit'])->name('admin-edit');
    Route::post('/adminUpdate', [DefaultController::class,'adminUpdate'])->name('admin-update');
    Route::post('/resetpassword1', [DefaultController::class,'resetpassword1'])->name('admin-resetpassword1');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

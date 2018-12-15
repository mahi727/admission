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

Route::get('/', function () {
    if(Auth::check()){
        return redirect()->route('home');
    }
    return view('authentications.login');
})->name('index');

Route::get('/admin', function () {
    return view('admins.admin_login');
})->name('admin.login');

Auth::routes(['verify' => true]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth', 'verified']], function(){

    Route::get('/change_password', 'HomeController@change_password')->name('change_password');
    Route::post('/change_password', 'HomeController@password_update')->name('password_update');


	Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/circular/publish', 'HomeController@circular_publish')->name('circular.publish');
    Route::post('/circular/upload', 'HomeController@circular_upload')->name('circular.upload');

    Route::post('/sign/upload', 'HomeController@sign_upload')->name('sign.upload');

    Route::get('/apply', 'HomeController@apply')->name('apply');
    Route::resource('applications', 'ApplicationController');
    Route::get('/applications/approve/{id}', 'ApplicationController@approve')->name('applications.approve');
    Route::get('/applications/destroy/{id}', 'ApplicationController@destroy')->name('applications.decline');

    Route::get('/admitcard/index', 'HomeController@admitcard')->name('admitcard.index');
    Route::get('/admitcard/publish', 'HomeController@publish_admit_card')->name('admitcard.publish');

    Route::resource('seatplans', 'SeatPlanController');
    Route::get('/seatplan/publish', 'SeatPlanController@publish')->name('seatplans.publish');
    Route::get('/seatplan/destroy/{id}', 'SeatPlanController@destroy')->name('seatplans.destroy');

    Route::get('/attendance/download', 'HomeController@download_attendance')->name('attendance.download');

    Route::get('/attendance', 'HomeController@attendance_sheet')->name('attendance');
    Route::post('/attendance/upload', 'HomeController@attendance_sheet_upload')->name('attendance_sheet.upload');

    Route::get('/result', 'HomeController@result')->name('admin.result');
    Route::post('/result/upload', 'HomeController@result_upload')->name('result.upload');

    Route::get('/application_form', 'HomeController@show_application_form')->name('application_form');

    Route::get('/checkout/payment', 'PaypalController@checkout')->name('payment.checkout');
    //Paypal Payment
    Route::get('/payment/done', 'PaypalController@getDone')->name('payment.done');
    Route::get('/payment/cancel', 'PaypalController@getCancel')->name('payment.cancel');

    Route::get('/payment_status', function(){
        return view('applicant.payment');
    })->name('payment_status');

    Route::get('/admit', function(){
        return view('applicant.admit');
    })->name('admit');

    Route::get('/seatplan', function(){
        return view('applicant.seat');
    })->name('seatplan');

    Route::get('/result/view', function(){
        return view('applicant.result');
    })->name('result');

    Route::get('/admit/download', 'HomeController@download_admit')->name('admit.download');
});

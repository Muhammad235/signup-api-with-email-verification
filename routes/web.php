<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServicesend
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/email', function () {
    // return view('mail.welcome-mail');

    Mail::to('y.adeleke05@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

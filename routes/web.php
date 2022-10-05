<?php

use App\Http\Controllers\VolunteerController;
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
    return view('welcome');
})->name('welcome');

Route::get('/bio', function () {
    return view('bio');
})->name('bio');

Route::post('/store/volunteer', [VolunteerController::class, 'store'])->name('store.volunteer');

Route::get('/email/verify/{token}', [VolunteerController::class, 'verify_email_page'])->name('email.verify.get');

Route::post('/email/verify/', [VolunteerController::class, 'verify_email'])->name('email.verify');

Route::post('/email/resend-verify/', [VolunteerController::class, 'resend_verify_email'])->name('email.verify.resend');

<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    // return view('pages.404');
    return redirect()->route('home');
});
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::post('send-contact-form', [MailController::class, 'sendEmail'])->name('sendEmail');
Route::get('/view-mail', function () {
    return view('components.templates.new_message_mail');
});
Route::get('/my-cv', [FileController::class, 'viewCV'])->name('viewCV');
Route::get('/download-cv', [FileController::class, 'downloadCV'])->name('downloadCV');
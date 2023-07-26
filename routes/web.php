<?php

use App\Http\Controllers\BookingController;
use App\Http\Livewire\Home;
use App\Http\Livewire\Pages\BookingForm;
use App\Http\Livewire\Pages\Message;
use App\Http\Livewire\Pages\RoomPage;
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

Route::get('/', Home::class)->name('home');
Route::get('/singleroom/{room_id}', RoomPage::class)->name('single_room');
Route::post('/bookroom/{id}', [BookingController::class, 'book'])->name('book_room');
Route::get('/message/{message}', Message::class)->name('message');
Route::get('/booking_form/{id}', BookingForm::class)->name('booking_form');
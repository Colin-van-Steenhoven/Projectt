<?php

use App\Http\Controllers\EventsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketsController;
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
});
Route::get('/', [PagesController::class, 'showHome'])->name('home');

Route::get('/about-us', [PagesController::class, 'viewAboutUs'])->name('about-us');
Route::get('/contact', [PagesController::class, 'viewContact'])->name('contact');
Route::get('/tickets', [TicketsController::class, 'listTickets'])->name('listTickets')->middleware('auth');
Route::get('/admin/add-event', [EventsController::class, 'addEvent'])->name('add-event')->middleware('auth');
Route::post('/admin/add-event', [EventsController::class, 'processAddEvent'])->name('processAddEvent')->middleware('auth');
Route::get('/admin/admin-home', [PagesController::class, 'adminHome'])->name('admin-home')->middleware('auth');


Route::get('/testroute2', [PagesController::class, 'showTest2']);

require __DIR__.'/auth.php';

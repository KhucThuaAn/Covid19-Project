<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PlaceController;

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

Route::get('/',[ViewController::class, 'index'] )->name('index');
Route::get('/report',[ViewController::class, 'report'] )->name('report.index');
Route::get('/areas/create',[ViewController::class, 'create_areas'] )->name('areas.create');
Route::resource('campaign', CampaignController::class);
Route::resource('session', CampaignController::class);
Route::resource('ticket', TicketController::class);
Route::get('/places/create',[ViewController::class, 'create_place'] )->name('place.create');





Route::get('/',[ViewController::class, 'index'] )->name('index');
Route::get('/',[ViewController::class, 'index'] )->name('index');
Route::get('/',[ViewController::class, 'index'] )->name('index');
Route::get('/',[ViewController::class, 'index'] )->name('index');
Route::get('/',[ViewController::class, 'index'] )->name('index');

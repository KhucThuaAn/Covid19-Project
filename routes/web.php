<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AreaController;

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
Route::get('/',[ViewController::class, 'login'] )->name('login');
Route::post('/login',[LoginController::class, 'check'] )->name('login.check');

Route::group(['middleware' => 'checklogin'], function () {
    // Quản lý vùng
    Route::resource('area', AreaController::class)->except('create');
    Route::get('/campaigns/{campaign_id}/area/create',[AreaController::class, 'create'] )->name('area.create');

    Route::resource('campaign', CampaignController::class);
    Route::resource('session', CampaignController::class);
    Route::resource('ticket', TicketController::class)->except('create');
    Route::get('/campaigns/{campaign_id}/tickets/create',[TicketController::class, 'create'] )->name('ticket.create');
    Route::get('/places/create/{campaign}',[PlaceController::class, 'create'] )->name('place.create');
    Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');
    Route::get('/report',[ViewController::class, 'report'] )->name('report');
});

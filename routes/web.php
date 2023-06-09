<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CapacityController;

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
    Route::get('/campaigns/{campaign}/area/create',[AreaController::class, 'create'] )->name('area.create');

    // Quản lý phiên
    Route::resource('session', SessionController::class)->except('create','edit');
    Route::get('/campaigns/{campaign}/session/create',[SessionController::class, 'create'] )->name('session.create');
    Route::get('/campaigns/{campaign}/session/edit/{session}',[SessionController::class, 'edit'] )->name('session.edit');

    // Địa điểm
    Route::get('/campaigns/{campaign}/place/create',[PlaceController::class, 'create'] )->name('place.create');
    Route::resource('place', PlaceController::class)->except('create');

    // Vé
    Route::resource('ticket', TicketController::class)->except('create');
    Route::get('/campaigns/{campaign}/tickets/create',[TicketController::class, 'create'] )->name('ticket.create');

    // Chiến dịch
    Route::resource('campaign', CampaignController::class)->except('show');
    Route::get('/campaign/{slug}', [CampaignController::class, 'show'])->name('campaign.show');

    Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');
    Route::get('/report',[ViewController::class, 'report'] )->name('report');

    // Biểu đồ
    Route::get('campaign/{slug}/capacity', [CapacityController::class, 'index'] )->name('campaign.capacity');

});



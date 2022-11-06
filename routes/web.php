<?php

use App\Http\Controllers\BussinesController;
use App\Http\Controllers\Panel\BussinesController as PanelBussinesController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/storage', function(){
    $link=Artisan::call('storage:link');

    if($link){
        return response()->json([
            'message' => 'Storage link created'
        ]);
    }else{
        return response()->json([
            'message' => 'Storage link not created'
        ]);
    }
});

Route::get('/', [BussinesController::class, 'index'])->name('home');

Route::group(['prefix' => 'bussines'], function () {
    Route::get('/', [PanelBussinesController::class, 'index'])->name('bussines.home');
    Route::get('/create', [PanelBussinesController::class, 'create'])->name('bussines.create');
    Route::get('/edit/{busine}', [PanelBussinesController::class, 'edit'])->name('bussines.edit');
    Route::get('/{busine}', [BussinesController::class, 'show'])->name('main.bussines.show');
    Route::get('/{busine}/review', [BussinesController::class, 'review'])->name('main.bussines.review');
});

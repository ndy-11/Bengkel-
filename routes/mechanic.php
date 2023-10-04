<?php

use App\Http\Controllers\MechanicController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:mechanic'])->group(function () {
    Route::prefix('mechanic')->group(function(){
        Route::get('/dashboard', [MechanicController::class, 'dashboard'])->name('mechanic.dashboard');
        Route::get('/profilku', [MechanicController::class, 'profilku'])->name('mechanic.profilku');
        Route::put('/profilku/update', [MechanicController::class, 'update'])->name('mechanic.update');
        Route::get('/antrian', [MechanicController::class, 'antrian'])->name('mechanic.antrian');
        Route::get('/update-service/{id}', [MechanicController::class, 'updateService'])->name('mechanic.updateService');
        Route::put('/give-recom/{id}', [MechanicController::class, 'giveRecom'])->name('mechanic.giveRecom');
        Route::put('/update-waktu/{id}', [MechanicController::class, 'updateWaktu'])->name('update-waktu');
        Route::put('/update-status/{id}', [MechanicController::class, 'updateStatus'])->name('mechanic.updateStatus');
        Route::put('/update-status2/{id}', [MechanicController::class, 'updateStatus2'])->name('mechanic.updateStatus2');
        Route::put('/update-status3/{id}', [MechanicController::class, 'updateStatus3'])->name('mechanic.updateStatus3');
        Route::get('/servisku', [MechanicController::class, 'servisku'])->name('mechanic.servisku');
        Route::post('/cart', [CartController::class, 'store'])->name('mechanic.cart');
        Route::put('/cart/updatequantity/{id}', [CartController::class, 'updateQuantity'])->name('update-quantity');
        Route::delete('/cart/remove/{id}', [CartController::class, 'removeItem'])->name('remove-item');
        Route::delete('/cart/clear/{serviceId}', [CartController::class, 'clearCart'])->name('clear-cart');

    });
});
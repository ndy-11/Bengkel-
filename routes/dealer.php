<?php

use App\Http\Controllers\DealerController;
use App\Http\Controllers\SparepartController;
use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;

Route::middleware(['auth', 'role:dealer'])->group(function () {
    Route::prefix('dealer')->group(function(){
        Route::get('/dashboard', [DealerController::class, 'dashboard'])->name('dealer.dashboard');
        Route::get('/dealerku', [DealerController::class, 'dealerku'])->name('dealer.dealerku');
        Route::get('/datapegawai', [DealerController::class, 'pegawai'])->name('dealer.datapegawai');
        Route::put('/datapegawai/update/{id}', [DealerController::class, 'updateMekanik'])->name('dealer.updateMekanik');        
        Route::get('/antrian', [DealerController::class, 'antrian'])->name('dealer.antrian');
        Route::get('/datasparepart',  [SparePartController::class, 'index'])->name('spareparts.index');
        Route::post('/datasparepart', [SparepartController::class, 'store'])->name('sparepart.store');
        Route::get('/spareparts/search', [SparePartController::class, 'search'])->name('spareparts.search');
        Route::get('/spareparts/clear-search', [SparePartController::class, 'clearSearch'])->name('spareparts.clear-search');
        Route::put('/datasparepart/update/{id}', [SparepartController::class, 'update'])->name('sparepart.update');
        Route::delete('/sparepart/{id}', [SparepartController::class, 'delete'])->name('sparepart.delete');
        Route::get('/transaksi', [DealerController::class, 'transaksi'])->name('dealer.transaksi');
        Route::put('/dealerku/update', [DealerController::class, 'update'])->name('dealer.update');
        Route::delete('/datapegawai/delete/{id}', [DealerController::class, 'deleteMekanik'])->name('dealer.deleteMekanik');
        // Route::get('/antrian/{id}', [DealerController::class, 'antrian'])->name('dealer.antrian');
        Route::get('/search', [DealerController::class, 'search'])->name('dealer.search');
        Route::get('/search-two', [DealerController::class, 'search2'])->name('dealer.search2');
        Route::get('/dataservis', [DealerController::class, 'dataservis'])->name('dealer.dataservis');
        Route::get('/data-transaksi-6', [DealerController::class, 'servis6'])->name('dealer.servis6');
        Route::get('/data-transaksi-7', [DealerController::class, 'servis7'])->name('dealer.servis7');
        Route::get('/print/{month}', [DealerController::class, 'print'])->name('dealer.print');
        Route::get('/transaksi-sparepart-6', [DealerController::class, 'transaksisparepart'])->name('dealer.transaksisparepart');
        Route::get('/transaksi-sparepart-7', [DealerController::class, 'transaksisparepart7'])->name('dealer.transaksisparepart7');
    });
});
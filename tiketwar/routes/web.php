
<?php

use App\Http\Controllers\KonserController;
use Illuminate\Support\Facades\Route;

$daftarKonser = [
    1 => ['nama' => 'Coldplay - Music of the Spheres', 'kota' => 'Jakarta', 'harga' => 1500000, 'sisa' => 25],
    2 => ['nama' => 'NCT Dream - The Dream Show', 'kota' => 'Jakarta', 'harga' => 1200000, 'sisa' => 0],
    3 => ['nama' => 'Dewa 19 - Pesta Rakyat', 'kota' => 'Yogyakarta', 'harga' => 450000, 'sisa' => 120],
];

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/konser', [KonserController::class, 'index'])
    ->name('konser.index');

Route::get('/konser/create', [KonserController::class, 'create'])
    ->name('konser.create');

Route::post('/konser', [KonserController::class, 'store'])
    ->name('konser.store');

Route::get('/konser/{id}', [KonserController::class, 'show'])
    ->whereNumber('id')
    ->name('konser.detail');

Route::get('/konser/{id}/edit', [KonserController::class, 'edit'])
    ->whereNumber('id')
    ->name('konser.edit');

Route::put('/konser/{id}', [KonserController::class, 'update'])
    ->whereNumber('id')
    ->name('konser.update');

Route::delete('/konser/{id}', [KonserController::class, 'destroy'])
    ->whereNumber('id')
    ->name('konser.destroy');

Route::view('/tentang', 'about')->name('tentang');

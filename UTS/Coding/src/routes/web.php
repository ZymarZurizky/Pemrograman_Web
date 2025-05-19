<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use Livewire\Livewire;

/* NOTE: Jangan dihapus
   Livewire asset handling kalau aplikasi jalan di subfolder domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/* END */

// Route homepage
Route::get('/', function () {
    return view('welcome');
});
    
Route::resource('pasiens', PasienController::class);

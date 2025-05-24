<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::view('/home', 'dashboard')->name('dash');
});

require __DIR__.'/auth.php';

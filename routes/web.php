<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    $year =  Carbon::today()->year;
    return Inertia::render('Welcome', [
        "year" => $year
    ]);
});

//require __DIR__.'/auth.php';

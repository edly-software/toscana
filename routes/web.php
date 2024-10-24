<?php

use App\Models\Menu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $year = Carbon::today()->year;
    $menu = Menu::latest()->first();
    $path = asset($menu->path);

    return Inertia::render('Welcome', [
        'year' => $year,
        'menuPath' => $path,
    ]);
});

//require __DIR__.'/auth.php';

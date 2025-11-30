<?php

use App\Models\Menu;
use App\Models\Pasta;
use App\Models\Pizza;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/", function () {
    $year = Carbon::today()->year;
    $menu = Menu::latest()->first();
    $path = asset('storage/'.$menu->path);

    $pasta = Pasta::all();
    $pizza = Pizza::all();

    return Inertia::render("Welcome", [
        "year" => $year,
        "menuPath" => $path,
        "pizza" => $pizza,
        "pasta" => $pasta,
    ]);
});

Route::get('/datenschutz', function () {
    $year = Carbon::today()->year;

    return Inertia::render("Datenschutz", [
        "year" => $year,
    ]);
});

Route::get('/impressum', function () {
    $year = Carbon::today()->year;

    return Inertia::render("Impressum", [
        "year" => $year,
    ]);
});

//require __DIR__.'/auth.php';

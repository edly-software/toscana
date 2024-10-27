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
    $path = asset($menu->path);

    $pasta = Pasta::all();
    $pizza = Pizza::all();

    return Inertia::render("Welcome", [
        "year" => $year,
        "menuPath" => $path,
        "pizza" => $pizza,
        "pasta" => $pasta,
    ]);
});

//require __DIR__.'/auth.php';

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
    $content = file_get_contents("../resources/views/content/datenschutz.md");

    return view('datenschutz')->with(['content'=>$content]);
});

Route::get('/impressum', function () {
    $content = file_get_contents("../resources/views/content/impressum.md");

    return view('impressum')->with(['content'=>$content]);
});

//require __DIR__.'/auth.php';

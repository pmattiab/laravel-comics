<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    $comics_array = config("comics");
    $data = [
        "comics_array" => $comics_array
    ];
    return view("home", $data);
})->name("home");

Route::get("/comic/{id}", function ($id) {
    $comics_array = config("comics");
    
    $comic = [];

    foreach ($comics_array as $current_comic) {
        
        if ($current_comic["id"] == $id) {
            $comic = $current_comic;
        }
    }

    if (empty($comic)) {
        abort("404");
    }

    $data = [
        "comic" => $comic
    ];

    return view("comic", $data);
})->name("comic");

Route::get("/characters", function () {
    return view("characters");
})->name("characters");

Route::get("comics", function () {
    $comics_array = config("comics");
    $data = [
        "comics_array" => $comics_array
    ];
    return view("comics", $data);
})->name("comics");

Route::get("/movies", function () {
    return view("movies");
})->name("movies");

Route::get("/tv", function () {
    return view("tv");
})->name("tv");

Route::get("/games", function () {
    return view("games");
})->name("games");

Route::get("/collectibles", function () {
    return view("collectibles");
})->name("collectibles");

Route::get("/videos", function () {
    return view("videos");
})->name("videos");

Route::get("/fans", function () {
    return view("fans");
})->name("fans");

Route::get("/news", function () {
    return view("news");
})->name("news");

Route::get("/shop", function () {
    return view("shop");
})->name("shop");
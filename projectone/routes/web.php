<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/about", function () {
    return view("header.about");
})->name("about");
Route::get('/',[\App\Http\Controllers\Home::class,'homeUser'])->name("front.home");

Route::get("/service", function () {
    return view("header.service");
})->name("service");
Route::get("/contact", function () {
    return view("header.contact");
})->name("contact");
Route::get("/co", function () {
    return view("coursoul");
})->name("co");
Route::get('images/{folder}/{id}/{size?}', function ($folder, $id, $size = '') {
    return response()->file(storage_path("app/public/$folder/$id"));
});

Route::get("admin/register", [App\Http\Controllers\login::class, 'register'])->name("rigster");
Route::get("/news/category/{category_id}",[\App\Http\Controllers\News::class,'showNewsCategory'])->name("news.category.show");
Route::get("/news/{news_id}",[\App\Http\Controllers\News::class,"showNewsSelected"])->name("news.selected.show");






//admin   route
Route::name('admin.')->prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get("login", [\App\Http\Controllers\login::class, 'showLogin'])->name('login');
        Route::post("login", [App\Http\Controllers\login::class, 'login'])->name("login");

    });

    Route::middleware('log_in')->group(function () {
        Route::resource('news', \App\Http\Controllers\News::class);
        Route::resource('classification', \App\Http\Controllers\classification::class);
        Route::get('',[\App\Http\Controllers\Home::class,"index"])->name("home");
        Route::get("logout", [\App\Http\Controllers\writer::class, "logout"])->name("logout");

    });

});


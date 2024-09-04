<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('/');


Route::get('/Mkwawa-History', [AboutController::class, 'index'])->name('Mkwawa-History');
Route::get('/Tanzania-Tobacco-History', [AboutController::class, 'tobacco'])->name('Tanzania-Tobacco-History');


Route::get('/Events/{id}', [EventController::class, 'index'])->name('Events');


Route::get('/Leaf Growing', function () {
    return view('Service.Leaf');
})->name('Leaf');

Route::get('/Leaf Processing', function () {
    return view('Service.Process');
})->name('Process');

Route::get('/Export', function () {
    return view('Service.Export');
})->name('Export');

Route::get('/Blog',[PostController::class,'index'])->name('Blog');
Route::get('/Post-Details/{id}',[PostController::class,'PostDetails'])->name('Post-Details');




Route::get('/Terms-Conditions', function () {
    return view('Team&Condition.Team-Condition');
})->name('Terms-Conditions');

Route::get('/Human-Right-Policy', function () {
    return view('Human-Rights-Policy.Human-Rights-Policy');
})->name('Human-Right-Policy');

Route::get('/Child-Labor', function () {
    return view('Child-Labor.Child-Labor-Policy');
})->name('Child-Labor-Policy');

Route::get('/Anti-Discrimination', function () {
    return view('Anti-Discrimination.Anti-Discrimination');
})->name('Anti-Disc');

Route::get('/Women-Right', function () {
    return view('Women.Women-Right');
})->name('Women-Right');

Route::get('/Health-Safety', function () {
    return view('Health-Safety.Health-Safety');
})->name('Health-Safety');

Route::get('/Water-Conservation', function () {
    return view('Water-Conservation.Water-Conservation');
})->name('Water-Conservation');

Route::get('/Sustainability-Program', function () {
    return view('Sustainability-Program.Sustainability-Program');
})->name('Sustainability-Program');

Route::get('/Social-Responsibility', function () {
    return view('Social-Responsibility.Social-Responsibility');
})->name('Social-Responsibility');


Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/Sub-login', [AuthController::class, 'login'])->name('login.submit');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
Route::get('/Admin',[AdminController::class,'index'])->name('Admin');

Route::get('/Admin/Add-Post',[PostController::class,'addpost'])->name('Admin-Add-Post');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::Put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::get('/Post/View-All', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/Admin/Add-Event', function () {
    return view("Admin.Event.Add-Event");
})->name('Admin-Add-Event');

Route::post('/Event', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::PUT('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::get('/Event/View-All', [EventController::class,'show'])->name('events.show');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');


Route::get('/Admin/Category', function () {
    return view('Admin.Category.Add-Category');
})->name('Admin-Category');

Route::post('/category', [CategoryController::class,'store'])->name('categories.store');

});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');




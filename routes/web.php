<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

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
Route::middleware(['auth'])->group(function(){
    Route::get("/",[PostController::class , 'index'])->name('post.index');
    Route::get("/post/{post}",[PostController::class , 'show'])->name('post.show');
    Route::get("/edit/{post}",[PostController::class , 'edit'])->name('post.edit');
    Route::put("/post/{post}",[PostController::class , 'update'])->name('post.update');
    Route::get("/add",[PostController::class , 'create'])->name('post.create');
    Route::post("/post",[PostController::class , 'store'])->name('post.store');
    Route::delete("/post/{post}",[PostController::class , 'destroy'])->name('post.destroy');

    Route::get("/CommentAdd/{post_id}",[CommentController::class , 'create'])->name('commentCreate');
    Route::post("/CommentStore/{id}",[CommentController::class , 'store'])->name('commentStore');
    Route::get("/CommentShow/{comment}",[CommentController::class , 'show'])->name('commentShow');
    Route::get("/comm_edit/{comment}",[CommentController::class, 'edit'])->name('commentEdit');
    Route::put("/CommentUpdate/{comment}",[CommentController::class , 'update'])->name('commentUpdate');
    Route::delete("/CommentDestroy/{comment}",[CommentController::class , 'destroy'])->name('commentDestroy');

    Route::get('/admin/users',[AdminController::class , 'index'])->name('admin.users.index');
    Route::delete('/admin/users/{user}',[AdminController::class , 'destroy'])->name('admin.users.destroy');

    Route::get('/category',[CategoryController::class , 'index'])->name('showAllCategories');
    Route::get("/create",[CategoryController::class , 'create'])->name('cat.create');
    Route::post("/store",[CategoryController::class , 'store'])->name('cat.store');
    Route::get("/show/{category}",[CategoryController::class , 'show'])->name('cat.show');
    Route::get("/categories/{category}",[CategoryController::class, 'edit'])->name('cat.edit');
    Route::put("/update/{category}",[CategoryController::class , 'update'])->name('cat.update');
    Route::delete("/destroy/{category}",[CategoryController::class , 'destroy'])->name('cat.destroy');

    Route::get('/tag',[TagController::class , 'index'])->name('showAllTags');
    Route::get("/createT",[TagController::class , 'create'])->name('tag.create');
    Route::post("/storeT",[TagController::class , 'store'])->name('tag.store');
    Route::get("/showT/{tag}",[TagController::class , 'show'])->name('tag.show');
    Route::get('/tags/{tag}',[TagController::class , 'edit'])->name('tag.edit');
    Route::put("/updateTag/{tag}",[TagController::class , 'update'])->name('tag.update');
    Route::delete("/destroyT/{tag}",[TagController::class , 'destroy'])->name('tag.destroy');

    Route::get('logout',[AuthController::class , 'logout'])->name('logout');

});

Route::middleware(['guest'])->group(function(){
    Route::get('login',[AuthController::class , 'ShowLoginForm'])->name('loginShow');
    Route::post('login',[AuthController::class , 'login'])->name('login');
    Route::get('register',[AuthController::class , 'ShowRegisterForm'])->name('registerShow');
    Route::post('register',[AuthController::class , 'register'])->name('register');
});

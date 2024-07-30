<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminRegisterController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\front\AuthController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\MessageController;
use App\Http\Controllers\front\NotFoundController;
use App\Http\Controllers\front\ProductDetailController;
use App\Http\Controllers\front\ShopController;
use App\Http\Controllers\LogoutController;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home.index');
});

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/product/{slug}', [ProductDetailController::class, "index"])->name("productDetail");
Route::get('/shop', [ShopController::class, "index"])->name("shop");
Route::get('/notfound', [NotFoundController::class, "index"])->name("notFound");
Route::get('/logout', [LogoutController::class, "logout"])->name("logout");
Route::get('/contact', [ContactController::class, "index"])->name("contact");
Route::post('/message', [MessageController::class, "create"])->name("message.create");
Route::get('/auth', [AuthController::class, "index"])->name("auth");
Route::post('/auth-register', [AuthController::class, "store"])->name("auth.register");
Route::post('/auth-login', [AuthController::class, "login"])->name("auth.login");

Route::prefix('admin1')->group(function () {
    Route::get("/", [UserController::class, "index"])->name("admin.home")->middleware('admin');
    Route::get("/login", [AdminLoginController::class, "index"])->name("admin.login");
    Route::post("/custom-login", [AdminLoginController::class, "login"])->name("admin.custom-login");
    Route::get("/register", [AdminRegisterController::class, "index"])->name("admin.register")->middleware('admin_register');
    Route::post("/sign-up", [AdminRegisterController::class, "register"])->name("admin.signup");
    Route::get("/user-update/{slug}", [UserController::class, "UpdateUserIndex"])->name("admin.user.update")->middleware('user_update');
    Route::post("/user-updateA/{slug}", [UserController::class, "UpdateUser"])->name("admin.user.updateA");
    Route::get("/single-user-update/{slug}", [UserController::class, "UpdateSingleUserIndex"])->name("admin.single.user.update");
    Route::post("/single-user-updateA/{slug}", [UserController::class, "UpdateSingleUser"])->name("admin.single.user.updateA");
});

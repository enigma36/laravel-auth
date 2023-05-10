<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    "verify"=>true
]);

Route::resource("catagory", CatagoryController::class);
Route::resource("product", ProductController::class);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn') ;
Route::get('/registration', [AuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post("/registerUser", [AuthController::class,'registerUser'])->name("registerUser");
Route::post("/loginUser", [AuthController::class,'loginUser'])->name("loginUser");
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('isLoggedIn') ;
Route::get('/logout',[AuthController::class,'logout']);

/*
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');
*/
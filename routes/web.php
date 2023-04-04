<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about']);
Route::get('/posts', [PostsController::class, 'index']);
Route::resource('foods', FoodsController::class);

// Admin login
// Route::get('/login', function() {
//     return view('/admin/login');
// });

// Admin routes
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    //dd('asdasdasd');
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('products', ProductsController::class)->middleware('auth.admin.product');
});

// Route::resource('/foods', [PostsController::class, 'index']);
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

// Route::get('/', function () {
//     // return view('welcome');
//     return env('MY_NAME');
// });

// Route::get('/users', function (){
//     return 'This is the users page';
// });

// Route::get('/foods', function (){
//     return ['rice', 'noddle', 'eggs'];
// });

// Route::get('/aboutMe', function (){
//     return response()->json([
//         'name' => 'Shan',
//         'age'  => 18
//     ]);
// });

// Route::get('/something', function (){
//     return redirect('/aboutMe');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/products', [
//     ProductController::class,
//     'index'
// ])->name('products');

// How to validate "id only Interger" ?
// Regular Expression
// Route::get('products/{id}', [
//     ProductController::class,
//     'detail'
// ])->where('id', '[0-9]+')  ;

// Relug
// Route::get('products/{productName}/{id}', [
//     ProductController::class,
//     'detail'
// ])->where( [
//     'productName' => '[a-zA-Z0-9]+',
//     'id' => '[0-9]+'
// ]);

// Route::get('products/{productName}', [
//     ProductController::class,
//     'detail'
// ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

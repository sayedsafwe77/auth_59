<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Gate;

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
Route::middleware(['cors'])->group(function () {
    Route::get('/', function () {
        // if( !Gate::allows('admin'))
        // {
        //     abort(403);
        // }
        // $user = auth()->id();

        return view('frontend.homepage');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Route::view('vue','vue-componant');

Route::resource('invoice', InvoiceController::class);
Auth::routes();


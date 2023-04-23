<?php

use App\Http\Controllers\ListController;
use App\Models\ListModel;
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

Route::get('/', function () {
    return view('home', [
        "active" => "home"
    ]);
});

Route::get('/add', function () {
    return view('add', [
        "active" => "add"
    ]);
});

Route::post('/add-account', [ListController::class, 'addAccount']);

Route::get('/list', [ListController::class, 'getAllLists']);

Route::get('/list/{nomor_rekening}', [ListController::class, 'findSlug']);

Route::get('/mutation', function () {
    return view('mutation', [
        "active" => "mutation"
    ]);
});

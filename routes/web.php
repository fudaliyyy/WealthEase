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

Route::get('/list', function () {
    $list_account = [
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank Mandiri",
            "nomor_rekening" => "1440022415449"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
    ];

    return view('list', [
        "active" => "list",
        "accounts" => $list_account,
    ]);
});

Route::get('/list/{nomor_rekening}', function ($nomor_rekening) {
    $list_account = [
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank Mandiri",
            "nomor_rekening" => "1440022415449"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
        [
            "name" => "Shabrina Putri Fudali",
            "bank" => "Bank BCA",
            "nomor_rekening" => "8692396528"
        ],
        [
            "name" => "Alfatih Rizqi Alfian",
            "bank" => "Bank BCA",
            "nomor_rekening" => "6755503138"
        ],
    ];

    $new_list = [];
    foreach ($list_account as $list) {
        if ($list["nomor_rekening"] === $nomor_rekening) {
            $new_list = $list;
        }
    }
    return view('transfer', [
        "active" => "transfer",
        "account" => $new_list,
    ]);
});

Route::get('/mutation', function () {
    return view('mutation', [
        "active" => "mutation"
    ]);
});

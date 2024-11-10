<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CdController;
use App\Http\Controllers\KoranController;
use App\Http\Controllers\SkripsiController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);
Route::resource('cds', CdController::class);
Route::resource('korans', KoranController::class);
Route::resource('skripsis', SkripsiController::class);
Route::resource('jurnals', JurnalController::class);

use App\Models\Book;
use App\Models\Jurnal;
use App\Models\Cd;
use App\Models\Koran;
use App\Models\Skripsi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    $books = Book::all();
    return view('books.index', compact('books'));
});

Route::get('/jurnals', function () {
    $jurnals = Jurnal::all();
    return view('jurnals.index', compact('jurnals'));
});

Route::get('/cds', function () {
    $cds = Cd::all();
    return view('cds.index', compact('cds'));
});

Route::get('/korans', function () {
    $korans = Koran::all();
    return view('korans.index', compact('korans'));
});

Route::get('/skripsis', function () {
    $skripsis = Skripsi::all();
    return view('skripsis.index', compact('skripsis'));
});

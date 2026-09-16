<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GameController;

//route::get first
//route::resource second

Route::get('/books', [BookController::class, 'index']) -> name('books.index');
//this is function index() found in BookController.php

Route::get('/books/featured', [BookController::class, 'featured']) -> name('books.featured');
//this is function featured() found in BookController.php

Route::get('/books/filter/{value?}', [BookController::class, 'filter']) -> name('books.filter');
//this is function filter() found in BookController.php

Route::get('/books/{id}', [BookController::class, 'show']) -> name('books.show');
//this is function show() found in BookController.php

Route::get('/teachers/featured', [TeacherController::class, 'featured']) -> name('teachers.featured');
Route::resource('teachers', TeacherController::class)->only(['index', 'show']);

Route::get('/games/favorite', [GameController::class, 'favorite'])->name('games.favorite');
Route::get('/games/featured', [GameController::class, 'featured'])->name('games.featured');
Route::resource('games', GameController::class)->only(['index', 'show']);

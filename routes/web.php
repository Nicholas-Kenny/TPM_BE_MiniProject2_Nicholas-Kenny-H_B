<?php

use App\Http\Controllers\TasklistController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TasklistController::class, 'welcome'])->name('welcome');

Route::post('/store', [TasklistController::class,'storeList'])->name('storeList');

Route::get('/create', [TasklistController::class,'createList'])->name('createList');

Route::get('/edit/{id}', [TasklistController::class,'editList'])->name('editList');

Route::patch('/update/{id}', [TasklistController::class,'updateList'])->name('updateList');

Route::delete('/delete/{id}', [TasklistController::class,'deleteList'])->name('deleteList');

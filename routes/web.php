<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\ColumnController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CardController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

//WorkspaceController
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [WorkspaceController::class, 'index']
)->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/workspace/show/{workspaceId}', [WorkspaceController::class, 'show']
)->name('workspace');

Route::middleware(['auth:sanctum', 'verified'])->post('/workspace/store', [WorkspaceController::class, 'store']
)->name('storeWorkspace');

Route::middleware(['auth:sanctum', 'verified'])->post('/workspace/destroy', [WorkspaceController::class, 'destroy']
)->name('destroyWorkspace');

//BoardController
Route::middleware(['auth:sanctum', 'verified'])->get('/board/show/{boardId}', [BoardController::class, 'show']
)->name('board');

Route::middleware(['auth:sanctum', 'verified'])->post('/board/store', [BoardController::class, 'store']
)->name('storeBoard');

//ColumnController
Route::middleware(['auth:sanctum', 'verified'])->post('/column/store', [ColumnController::class, 'store']
)->name('storeColumn');

Route::middleware(['auth:sanctum', 'verified'])->put('/column/archive/{column}', [ColumnController::class, 'archive']
)->name('archiveColumn');

Route::middleware(['auth:sanctum', 'verified'])->post('/board/destroy', [BoardController::class, 'destroy']
)->name('destroyBoard');

//CardController
Route::middleware(['auth:sanctum', 'verified'])->post('/card/store', [CardController::class, 'store']
)->name('storeCard');

Route::middleware(['auth:sanctum', 'verified'])->put('/card/edit/{card}', [CardController::class, 'update']
)->name('updateCard');

Route::middleware(['auth:sanctum', 'verified'])->put('/card/archive/{card}', [CardController::class, 'archive']
)->name('archiveCard');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClusterController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/benchmark', 'BenchmarkController@display')->name('benchmark');


Route::middleware(['auth:sanctum', 'verified'])->get('/clusters', 'ClusterController@display')->name('clusters');
Route::middleware(['auth:sanctum', 'verified'])->get('/add-cluster', function () {
        return view('add-cluster');
})->name('add-cluster');
Route::middleware(['auth:sanctum', 'verified'])->post('/add-cluster', 'ClusterController@store');


Route::middleware(['auth:sanctum', 'verified'])->get('/add-cluster', function () {
    return view('add-cluster');
})->name('add-cluster');
Route::middleware(['auth:sanctum', 'verified'])->post('/add-cluster', 'ClusterController@store');
Route::middleware(['auth:sanctum', 'verified'])->get('/workloads', 'WorkloadController@display')->name('workloads');



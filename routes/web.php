<?php

use App\Http\Livewire\Employes;
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
Route::get('start',\App\Http\Livewire\Employes::class)->name('Start');

Route::get('/', function () {
    return redirect('/employes');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/employes', \App\Http\Livewire\Employes::class)->name('Employés');
Route::get('/employe/{id}', \App\Http\Livewire\Employe::class)->name('employe');
Route::get('/besoins', \App\Http\Livewire\Besoins::class)->name('Besoins');
Route::get('/besoin/{id}', \App\Http\Livewire\Besoin::class)->name('besoin');

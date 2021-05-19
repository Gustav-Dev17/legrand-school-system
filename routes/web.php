<?php

use Illuminate\Support\Facades\Route;

//website routes

Route::get('/', function () {
    return view('website.home');
})->middleware(['auth'])->name('site.home');

Route::get('/listagem', 'App\Http\Controllers\AlunoController@lista')->middleware(['auth'])->name('site.listagem');

Route::get('/listagem/json', 'App\Http\Controllers\AlunoController@listaJson')->middleware(['auth']);

Route::get('/cadastro', 'App\Http\Controllers\AlunoController@cadastro')->middleware(['auth'])->name('site.cadastro');

Route::post('/cadastro/adiciona', 'App\Http\Controllers\AlunoController@adiciona')->middleware(['auth'])->name('site.adiciona');

Route::get('exclui', 'App\Http\Controllers\AlunoController@exclui')->middleware(['auth'])->name('site.exclui');

Route::get('cadastro/remove/{id}', 'App\Http\Controllers\AlunoController@remove')->middleware(['auth']);

//additional routes

Route::get('/locations', function () {
    return view('website.locations');
})->middleware(['auth'])->name('site.locations');

require __DIR__.'/auth.php';


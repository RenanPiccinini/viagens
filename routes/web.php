<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/sobre-nos', function () { return view('sobre-nos'); })->name('sobre-nos');
Route::get('/nacionais', function () { return view('nacionais'); })->name('nacionais');
Route::get('/internacionais', function () { return view('internacionais'); })->name('internacionais');
Route::get('/estudantil-pedagogico', function () { return view('estudantil-pedagogico'); })->name('estudantil-pedagogico');
Route::get('/estudantil-lazer', function () { return view('estudantil-lazer'); })->name('estudantil-lazer');
Route::get('/formaturas', function () { return view('formaturas'); })->name('formaturas');
Route::get('/fotos', function () { return view('fotos'); })->name('fotos');
Route::get('/contato', function () { return view('contato'); })->name('contato');

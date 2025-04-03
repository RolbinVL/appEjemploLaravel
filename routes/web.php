<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/books', function () {
    return view('books');
});
Route::get('/authors', function () {
    return view('authors');
});
Route::get('/publishers', function () {
    return view('publishers');
});
Route::get('/formulario', function () {
    return view('formulario');
});
Route::post('/mostrar', function (Request $request) {
    return view('mostrar', ['datos' => $request->all()]);
});
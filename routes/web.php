<?php

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

Route::get('/', 'Controller@index');

Route::get('/read', 'Controller@read')
    ->name('read');

Route::get('/dadata', 'Controller@daData')
    ->name('dadata');

Route::get('/form/{id?}', 'Controller@form')
    ->name('form');

Route::get('/item/{id}', 'Controller@item')
    ->name('item');

Route::post('/save', 'Controller@save')
    ->name('save');

Route::post('/delete', 'Controller@remove')
    ->name('remove');

Route::get('/download/{id}', 'Controller@download')
    ->name('download');

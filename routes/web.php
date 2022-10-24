<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

$title = 'My first page';
$text='My name is Dilyara';

Route::get('/', function () use ($text, $title) {
    return <<<php
    <!doctype html>
    <html lang="en">
    <head> 
    <title>$title</title>
    </head>
    <body>
    <h1>$text<h1>
    <h4>
    It was very hard to install Laravel via Docker<h4>*
    
    </body>
    </html>
    
    php;
});
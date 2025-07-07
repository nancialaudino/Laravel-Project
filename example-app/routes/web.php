<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'index']);

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('hello', [
        'laravelVersion' => app()->version(),
        'phpVersion' => phpversion(),
    ]);
});



// Page d'accueil
Route::get('/', function () {
    return 'Hello World From Laravel';
});

// Liste des produits
Route::get('/product', function () {
    return 'Voici la liste des produits';
});

// Détails d’un produit
Route::get('/product/{id}', function ($id) {
    return "Détails du produit avec l'ID : $id";
});

// Panier
Route::get('/cart', function () {
    return 'Voici votre panier';
});

*/



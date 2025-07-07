<?php

use Illuminate\Support\Facades\Route;

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

*/

// Page d'accueil
Route::get('/', function () {
    return 'Hello World From Laravel';
});

// Liste des produits
Route::get('/produits', function () {
    return 'Voici la liste des produits';
});

// Détails d’un produit
Route::get('/produits/{id}', function ($id) {
    return "Détails du produit avec l'ID : $id";
});

// Panier
Route::get('/panier', function () {
    return 'Voici votre panier';
});

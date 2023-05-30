<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;

Route::get('/', [AppController::class, 'index'])->name('index');

Route::get('category', [CategorieController::class, 'category'])->name('category');

Route::get('product', [ProductController::class, 'product'])->name('product');

Route::post('category', [CategorieController::class, 'PostCategory'])->name('PostCategory');

Route::post('product', [CategorieController::class, 'PostProduct'])->name('PostProduct');

Route::get('liste', [CategorieController::class, 'liste'])->name('liste');

Route::get('list', [ProductController::class, 'list'])->name('list');

Route::get('edit_categorie/{id}', [CategorieController::class, 'edit_categorie'])->name('edit_categorie');

Route::get('edit_product/{id}', [ProductController::class, 'edit_product'])->name('edit_product');

Route::delete('delete_category/{id}', [CategorieController::class, 'delete_category'])->name('delete_category');
Route::delete('delete_product/{id}', [ProductController::class, 'delete_product'])->name('delete_product');

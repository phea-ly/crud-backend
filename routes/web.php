<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::redirect('/', '/categories');

Route::get('/categories', function () {
    return view('welcome', [
        'pageMode' => 'index',
        'pageCategoryId' => null,
    ]);
})->name('categories.page.index');

Route::get('/categories/create', function () {
    return view('welcome', [
        'pageMode' => 'create',
        'pageCategoryId' => null,
    ]);
})->name('categories.page.create');

Route::get('/categories/{category}/edit', function (Category $category) {
    return view('welcome', [
        'pageMode' => 'edit',
        'pageCategoryId' => $category->getKey(),
    ]);
})->whereNumber('category')->name('categories.page.edit');

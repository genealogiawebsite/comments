<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/core/comments')
    ->as('core.comments.')
    ->namespace('LaravelEnso\Comments\Http\Controllers')
    ->group(function () {
        Route::get('', 'Index')->name('index');
        Route::post('', 'Store')->name('store');
        Route::patch('{comment}', 'Update')->name('update');
        Route::delete('{comment}', 'Destroy')->name('destroy');

        Route::get('users', 'Users')->name('users');
    });
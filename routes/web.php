<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUnitIsLoggedIn;
use App\Http\Controllers\Client\HomepageController;
use App\Http\Controllers\Client\SupportSytemController;
use App\Http\Controllers\Client\LogBaseReportController;

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('')->group(function () {

    Route::get('', [HomepageController::class, 'index'])->name('homepage');

    Route::prefix('')->controller(LogBaseReportController::class)->group(function () {
        Route::post('subimit-log-base-report', 'store')->name('subimit.log.base.report');
    });

    Route::prefix('')->controller(SupportSytemController::class)->group(function () {
        Route::get('unit-login', 'index')->name('unit.login');
        Route::get('reports/{slug}', 'blog_details')->name('blog.details');
        Route::get('training-resources', 'training_resources')->name('training.resources');
        Route::get('contact', 'contact')->name('contact');
        Route::post('unit-login', 'unit_login')->name('process.unit.login');

        Route::middleware(EnsureUnitIsLoggedIn::class)->group(function () {
            Route::get('supply-management', 'supply_management')->name('supply.management');
            Route::get('reports', 'reports')->name('reports');
            Route::get('reports/base-report/{base}', 'base_report')->name('base.report');
            Route::get('logout', 'logout')->name('logout');
        });
    });
});

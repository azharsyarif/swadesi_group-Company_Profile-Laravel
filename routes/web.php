<?php

use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/swadesi-group', [CompanyProfileController::class, 'companyGroup']);
Route::get('/swadesi-persada-mandiri', [CompanyProfileController::class, 'spmIndex']);
Route::get('/swadesi-cipta-mandiri-id', [CompanyProfileController::class, 'scmIndex']);
Route::get('/swadesi-cipta-mandiri-en', [CompanyProfileController::class, 'scmIndexEn']);

<?php

use App\Http\Controllers\EducationalMaterialController;
use App\Http\Controllers\HomeController;
use App\Models\EducationalMaterial;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/educational-materials/', [EducationalMaterialController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/educational-materials/add', [EducationalMaterialController::class, 'create']);
    Route::post('/dashboard/educational-materials/add', [EducationalMaterialController::class, 'store']);
    Route::get('/dashboard/educational-materials/{id}', [EducationalMaterialController::class, 'edit']);
    Route::post('/dashboard/educational-materials/{id}', [EducationalMaterialController::class, 'update']);
});

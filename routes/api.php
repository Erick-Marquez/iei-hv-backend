<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->middleware([])->group(function () {

    Route::apiResource('/courses', CourseController::class)->names('api.v1.courses');

    Route::apiResource('/grades', GradeController::class)->only(['index', 'show'])->names('api.v1.grades');

    Route::apiResource('/sections', SectionController::class)->names('api.v1.sections');

});

<?php

use App\Http\Controllers\Api\V1\AttendanceController;
use App\Http\Controllers\Api\V1\CantonController;
use App\Http\Controllers\Api\V1\CareerController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\DepartmentController;
use App\Http\Controllers\Api\V1\HamletController;
use App\Http\Controllers\Api\V1\MunicipalityController;
use App\Http\Controllers\Api\V1\NationalityController;
use App\Http\Controllers\Api\V1\PositionController;
use App\Http\Controllers\Api\V1\RegistrationController;
use App\Http\Controllers\Api\V1\SchoolCenterController;
use App\Http\Controllers\Api\V1\SectionController;
use App\Http\Controllers\Api\V1\SpecialtyController;
use App\Http\Controllers\Api\V1\StudentController;
use App\Http\Controllers\Api\V1\TeacherController;
use App\Http\Controllers\Api\V1\ZoneController;
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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('v1/attendance', AttendanceController::class);
// Route::apiResource('v1/canton', CantonController::class);
// Route::apiResource('v1/career', CareerController::class);
// Route::apiResource('v1/category', CategoryController::class);
// Route::apiResource('v1/department', DepartmentController::class);
// Route::apiResource('v1/hamlet', HamletController::class);
// Route::apiResource('v1/municipality', MunicipalityController::class);
// Route::apiResource('v1/nationality', NationalityController::class);
// Route::apiResource('v1/position', PositionController::class);
Route::apiResource('v1/registration', RegistrationController::class);
// Route::apiResource('v1/school_center', SchoolCenterController::class);
// Route::apiResource('v1/section', SectionController::class);
// Route::apiResource('v1/specialty', SpecialtyController::class);
Route::apiResource('v1/student', StudentController::class);
Route::apiResource('v1/teacher', TeacherController::class);
// Route::apiResource('v1/zone', ZoneController::class);

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

Route::apiResource('v1/asistencias', AttendanceController::class);
Route::apiResource('v1/cantones', CantonController::class);
Route::apiResource('v1/carreras', CareerController::class);
Route::apiResource('v1/categorias', CategoryController::class);
Route::apiResource('v1/departamentos', DepartmentController::class);
Route::apiResource('v1/caserios', HamletController::class);
Route::apiResource('v1/municipios', MunicipalityController::class);
Route::apiResource('v1/nacionalides', NationalityController::class);
Route::apiResource('v1/cargos', PositionController::class);
Route::apiResource('v1/matriculas', RegistrationController::class);
Route::apiResource('v1/centrosescolares', SchoolCenterController::class);
Route::apiResource('v1/secciones', SectionController::class);
Route::apiResource('v1/especialidades', SpecialtyController::class);
Route::apiResource('v1/alumnos', StudentController::class);
Route::apiResource('v1/profesores', TeacherController::class);
Route::apiResource('v1/zonas', ZoneController::class);

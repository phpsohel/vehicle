<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Artisan;

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
//Route Cache Clear
Route::get('/route-cache', function() {
    Artisan::call('route:clear');
return '<h1>Route Cache Clear</h1>';
});
//View Cache Clear
Route::get('/view-cache', function() {
    Artisan::call('view:clear');
return '<h1>View Cache clear</h1>';
});
// Clear Cache
Route::get('/clear-cache', function() {
    Artisan::call('route:clear');
return '<h1>Clear Cache clear</h1>';
});
//Config Cache Clear
Route::get('/config-cache', function() {
    Artisan::call('route:clear');
return '<h1>Config Cache   clear</h1>';
});
// Login
Route::get('/', function () {
    return redirect ()->route('login');
});

// Admin dashboard
Route::get('admin/index', [VehicleController::class, 'index'])->name('admin.index');
// Data Store
Route::get('admin/vehicle/add-vehicle', [VehicleController::class, 'add_vehicle'])->name('admin.vehicle.add-vehicle');
Route::post('admin/vehicle/store', [VehicleController::class, 'store'])->name('admin.vehicle.store');

Route::get('admin/vehicle/all-report', [VehicleController::class, 'all_report'])->name('admin.vehicle.all-report');
// Edit Update
Route::get('admin/vehicle/edit/{id}', [VehicleController::class, 'edit'])->name('admin.vehicle.edit');
Route::post('admin/vehicle/update/{id}', [VehicleController::class, 'update'])->name('admin.vehicle.update');
// Delete Data
Route::get('admin/vehicle/delete/{id}', [VehicleController::class, 'destroy'])->name('admin.vehicle.delete');
// View Data
Route::get('admin/vehicle/view/{id}', [VehicleController::class, 'view'])->name('admin.vehicle.view');

// Report Page
Route::get('admin/vehicle/report', [VehicleController::class, 'report'])->name('admin.vehicle.report');
// User Page
Route::get('admin/vehicle/user', [VehicleController::class, 'user'])->name('admin.vehicle.user');
Route::get('admin/vehicle/user/edit/{id}', [VehicleController::class, 'user_edit'])->name('admin.vehicle.user.edit');
Route::post('admin/vehicle/user/update/{id}', [VehicleController::class, 'user_upadte'])->name('admin.vehicle.user.update');
Route::get('admin/vehicle/user/delete/{id}', [VehicleController::class, 'user_delete'])->name('admin.vehicle.user.delete');

//Search
Route::post('admin/vehicle/search', [VehicleController::class, 'SearchQuery'])->name('admin.vehicle.search');
// Print Generate
Route::get('admin/print', [VehicleController::class, 'index'])->name('admin.print');
// Pdf Generate
Route::get('/students',[PrintController::class, 'index'])->name('students');
Route::get('/prnpriview',[PrintController::class, 'prnpriview'])->name('prnpriview');
// Pdf file Generate
Route::get('admin/pdf', [PdfController::class, 'index'])->name('pdf');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

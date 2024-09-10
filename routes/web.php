<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ResourceController;
use App\Models\Bill;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Encuesta

Route::get('/encuesta-inicial', [PatientController::class, 'index'])->name('encuesta-inicial');

// Home

Route::get('/home-usuario', [PatientController::class, 'index'])->name('home.usuario');

Route::get('/citas-usuario', [AppointmentController::class, 'CitasUsuario'])->name('citas.usuario');
Route::get('/profesionales-usuario', [AppointmentController::class, 'Profesionales'])->name('profesionales.usuario');
Route::get('/recursos-usuario', [ResourceController::class, 'Recursos'])->name('recursos.usuario');
Route::get('/notificaciones-usuario', [PatientController::class, 'index'])->name('notificaciones+.usuario');
Route::get('/historial-pagos-usuario', [BillController::class, 'index'])->name('historial.pagos.usuario');


// Citas

Route::get('/agendar-cita', [AppointmentController::class, 'AgendarCita'])->name('agendar.cita');
Route::post('/cancelar-cita', [AppointmentController::class, 'CancelarCita'])->name('cancelar.cita.usuario');
Route::get('/cita-programadas', [AppointmentController::class, 'CitasProgramadas'])->name('citas.programadas.usuario');

// Rutas-Profesional

// Home-Profesional
Route::get('/home-profesional', [PatientController::class, 'HomeProfesional'])->name('home.profesional');

Route::get('/citas-profesional', [AppointmentController::class, 'CitasProfesional'])->name('citas.profesional');
Route::get('/profesionales-profesional', [AppointmentController::class, 'CitasProfesional'])->name('citas.profesional');
Route::get('/recursos-profesional', [ResourceController::class, 'Recursos'])->name('recursos.profesional');
Route::get('/notificaciones-profesional', [PatientController::class, 'index'])->name('notificaciones.profesional');
Route::get('/historial-pagos-profesional', [BillController::class, 'index'])->name('historial.pagos.profesional');


// Citas-Profesional

Route::get('/agendar-cita-profesional', [AppointmentController::class, 'AgendarCitaProfesional'])->name('agendar.cita.profesional');
Route::post('/cancelar-cita-profesional', [AppointmentController::class, 'CancelarCitaProfesional'])->name('cancelar.cita.profesional');
Route::get('/cita-programadas-profesional', [AppointmentController::class, 'CitasProgramadasProfesional'])->name('citas.programadas.profesional');
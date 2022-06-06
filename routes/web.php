<?php

use App\Models\guru;
use App\Models\kelas;
use App\Models\agenda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\WelcomeController;

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


Route::get('/dashboard', function () {
    $jumlahguru = guru::count();
    $jumlahkelas = kelas::count();
    $jumlahagenda = agenda::count();
    return view('welcome', compact('jumlahguru', 'jumlahkelas', 'jumlahagenda'));
})->middleware('auth');


// data guru

// Route::get('/',[WelcomeController::class, 'welcome']);

Route::get('/dataguru',[GuruController::class, 'index'])->name('guru')->middleware('auth');

Route::get('/tambahguru',[GuruController::class, 'tambahguru'])->name('tambahguru')->middleware('auth');

Route::post('/insertdataguru',[GuruController::class, 'insertdataguru'])->name('insertdataguru')->middleware('auth');

Route::get('/tampilkandataguru/{id}',[GuruController::class, 'tampilkandataguru'])->name('tampilkandataguru')->middleware('auth');

Route::put('/updatedataguru/{id}',[GuruController::class, 'updatedataguru'])->name('updatedataguru')->middleware('auth');

Route::get('/deletedataguru/{id}',[GuruController::class, 'deletedataguru'])->name('deletedataguru')->middleware('auth');


// data kelas
Route::get('/datakelas',[KelasController::class, 'index'])->name('kelas')->middleware('auth');

Route::get('/tambahkelas',[KelasController::class, 'tambahkelas'])->name('tambahkelas')->middleware('auth');

Route::post('/insertdatakelas',[KelasController::class, 'insertdatakelas'])->name('insertdatakelas')->middleware('auth');

Route::get('/tampilkandatakelas/{id}',[KelasController::class, 'tampilkandatakelas'])->name('tampilkandatakelas')->middleware('auth');

Route::put('/updatedatakelas/{id}',[KelasController::class, 'updatedatakelas'])->name('updatedatakelas')->middleware('auth');

Route::get('/deletedatakelas/{id}',[KelasController::class, 'deletedatakelas'])->name('deletedatakelas')->middleware('auth');

// data Agenda
Route::get('/dataagenda',[AgendaController::class, 'index'])->name('agenda')->middleware('auth');

Route::get('/tambahagenda',[AgendaController::class, 'tambahagenda'])->name('tambahagenda')->middleware('auth');

Route::post('/insertdataagenda',[AgendaController::class, 'insertdataagenda'])->name('insertdataagenda')->middleware('auth');

Route::get('/tampilkandataagenda/{id}',[AgendaController::class, 'tampilkandataagenda'])->name('tampilkandataagenda')->middleware('auth');

Route::put('/updatedataagenda/{id}',[AgendaController::class, 'updatedataagenda'])->name('updatedataagenda')->middleware('auth');

Route::get('/deletedataagenda/{id}',[AgendaController::class, 'deletedataagenda'])->name('deletedataagenda')->middleware('auth');

// data mapel
Route::get('/mapel', [MapelController::class, 'mapel'])->name('mapel');

Route::get('/tambahmapel', [MapelController::class, 'create'])->name('tambahmapel');
Route::post('/insertmapel', [MapelController::class, 'store'])->name('insertmapel');

Route::get('/editmapel/{id}', [MapelController::class, 'tampilan'])->name('editmapel');
Route::put('/updatemapel/{id}', [MapelController::class, 'update'])->name('updatemapel');

Route::get('/deletemapel/{id}', [MapelController::class, 'destroy'])->name('deletemapel');

// login

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CancionesCategoriaController;
use App\Http\Controllers\CancionesController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\VideoCategoriaController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome'); })->name('index')->middleware('auth'); */
    Route::get('/', [EnlacesController::class, 'index'])->name('index')->middleware('auth');
Auth::routes();
/* Route::get('administrador', [EnlacesController::class, 'admin'])->name('administrador')->middleware('auth'); */
Route::resource('administradores', AdminController::class)->names('admin')->middleware('auth');
Route::get('Lista-de-alumnos', [AdminController::class, 'alumnos'])->name('alumnos')->middleware('auth');
Route::get('Bibliotecario', [AdminController::class, 'bibliotecario'])->middleware('auth')->name('bibliotecario');
Route::get('Administrador-Videos', [AdminController::class, 'videos'])->middleware('auth')->name('adminVideos');
Route::get('Administrador-Canciones', [AdminController::class, 'canciones'])->middleware('auth')->name('adminCanciones');
Route::get('Admini-Sisichakunay', [AdminController::class, 'sisicha'])->middleware('auth')->name('adminSisicha');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Biblioteca
Route::resource('Secciones', SeccionController::class)->names('secciones')->middleware('auth');
Route::resource('Categorias', CategoriaController::class)->names('categorias')->middleware('auth');
Route::resource('Libros', LibroController::class)->names('libros')->middleware('auth');
Route::get('Lista-de-Libros', [LibroController::class, 'libros'])->name('libros')->middleware('auth');


//Videos
Route::resource('Videos', VideoController::class)->names('videos')->middleware('auth');
Route::resource('video-categorias', VideoCategoriaController::class)->names('videoscat')->middleware('auth');
Route::get('videos-Puklla', [VideoCategoriaController::class, 'lista'])->name('videos')->middleware('auth');

//Canciones
Route::resource('Categorias-canciones', CancionesCategoriaController::class)->names('cancionescat')->middleware('auth');
Route::resource('canciones', CancionesController::class)->names('canciones')->middleware('auth');
Route::get('canciones-Puklla', [CancionesController::class, 'canciones'])->name('cancionesPuklla')->middleware('auth');

Route::resource('Dashboard', AdminController::class)->names('admin');
Route::get('resultados-de-busqueda', [EnlacesController::class, 'busqueda'])->name('busqueda')->middleware('auth');

Route::get('/limpiar-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Cache limpiada correctamente";
});
/* Route::get('migrar', function(){
    Artisan::call('migrate');
    return "migración corrió correctamente!";
});
Route::get('migrarRollback', function(){
    Artisan::call('migrate:rollback');
    return "rollback corrió correctamente!";
});
Route::get('migrarFresh', function(){
    Artisan::call('migrate:fresh');
    return "migración Fresh corrió correctamente!";
}); */
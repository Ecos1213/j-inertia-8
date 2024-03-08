<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use Inertia\Inertia;

Route::view('/', 'index');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('dashboard', [PageController::class, 'dashboard']) // apuntamos al controlador pagecontroller para despues apuntar al render de vue, recuerda que lo que hace laravel al entrar a php artisan serve usa la carpeta build y si queremos transpilar de vue a javascript, como esto usa vite tenemos que usar npm run dev y dejarlo abierto para ver los cambios que hicimos en vue, si no queremos esto o ya tenemos listo el entornode desarrollo tenemos que usar npm run build y construira el javascript de una vez 
->middleware('auth:sanctum') //este componente se instala automaticamente cuando trabajamos en jetstream y es el compoenente de authenticacion, este componente se hablara mas adelante en el curso de api
->name('dashboard'); // recuerda que el metodo name es para que nuestra ruta quede con ese nombre especialmente cuando usamos en la vista el metodo route ahi es donde mas usaremos el name


Route::resource('notes', PageController::class) // recuerda que el resource lo que hace es crear todas las rutas crud en este caso para en controlador notes, no le colocamos un name por que precisamente el resource ya le coloca un nombre estandard
->middleware('auth:sanctum');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia; // invocamos esta tecnologia para trabajar con las vistas de vue

class PageController extends Controller
{
    //
    public function dashboard() {
        // como estamos trabajando con esta nueva tecnologia, necesitamos invocarla que es inertia un componente de laravel
        return Inertia::render('Dashboard'); // Ahora usamos el componente inertia y invocamos el metodo render para que renderize el dashboard de vue
    }
}

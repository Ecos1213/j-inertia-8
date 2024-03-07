<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }


    /*
    * Para crear un nuevo projecto de laravel con jetstream usamos laravel new nombreproyecto --jet, jetstream lo que hace
    es instalarnos inertia con vue o liveware con blade depende de lo que queramos y jetstream se puede configurar en la carpeta
    conifg y archivo jetstream.php, para las dependecias de vue tenemos que instalar npm install y despues darle npm run dev 
    para ejecutar vue en dev coloque el javascript transpilado y ver los cambio del vue o si no usar npm run watch 
    para que lo haga automatico

    ahora para la configuracion lo que hace es crear un modelo de notas con una migracion un factory y resoure (este resource hace un 
    controlador con todo ya listo, con todas las funciones del crud que necesitas en el controlador)

    para probar la conexion a la base de datos podemos usar tinker de laravel para poder usarlo usamos el siguiente comando
    php artisan tinker
    y para probar si esta bien la conexion a la base de datos en tinker podemos usar el siguiente comando
    DB::connection()->getPdo();
    y si aparece todo el json de pdo quiere decir que esta bien conectada

    si queremos hacer la migracion con los seeders(ya que los seeders ejecutan el factory) usamos el siguiente comando
    php artisan migrate --seed
    */
}

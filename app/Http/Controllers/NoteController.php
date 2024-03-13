<?php
// para crear un controlador con todas las funciones de resources y a la vez modelo y factory usamos el siguiente comando php artisan make:model -rfm r es para crear el controlador tipo resources con todos sus metodos f de factory y m migracion
namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia; // este componente nos permite unir laravel con vue

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // como estamos trabajando con esta nueva tecnologia, necesitamos invocarla que es inertia un componente de laravel
        return Inertia::render('Notes/Index', [
            'notes' => Note::latest()->get() // como en laravel sin inertia y sin vue podemos enviar datos como lo hace el metodo view pero en este caso lo mandamos por el render e igual que con el metodo view y gracias a eloquent que usamos el modelo para tomar todos los datos desde los ultimos hasta los mas viejos (el metodo latest toma los datos de forma descendete desde los recien subidos hasta los mas viejo ya que este ordena los datos con el campo created_at osea con las fechas mas nuevas hasta las viejas) y usamos el metodo get para decirle a laravel que tome la informacion si no hacemos esto aparecera un error
        ]); // Ahora usamos el componente inertia y invocamos el metodo render para que renderize el dashboard de vue
        // el render ira ala carpeta notes y renderizara el archivo Index.vue
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
        return Inertia::render('Notes/Show', compact('note')); //El método compact() se utiliza para crear un array asociativo que contiene variables y sus valores. Toma una lista de nombres de variables como argumentos y devuelve un array donde las claves son los nombres de las variables y los valores son los valores actuales de esas variables. En resumen compact es igual a esto en este caso ['note' => $note], osea que le estamos pasando a esta vista el array
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

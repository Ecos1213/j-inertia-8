<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';
//import { ref } from 'vue';
import { reactive } from 'vue'


const props = defineProps({ // defineProps lo que hace es definir una propiedad que se va a usar en la plantilla pero no dentro del script por eso necesitamos una variable ya que defineprops retorna este objeto y podemos usar la variable dentro del script para traer sus datos esto ya probiene de vue3
    note: Object, // definimos note como Object de en vez de array por que lo que vamos a recibir es un unico valor y es un objeto, esto se define por que viene del controlador NoteController 
});

//const form = ref({ // aunque podemos usar ref o reactive, con ref podemos usar value y con reactive tenemos que tomar un objeto ya que reactive lo rodea el valor con un objeto y ref para cambiar el valor tenemos que usar nombre.value para cambiar su valor
//const form = reactive({
const form = useForm({ // usaremos mejor useform que nos provee inertia ya que es un asistente de formulario que nos permite tomar errores de validaciones que vengan y podemos enviar sus valores ya agregados por submit, post, put, get, delete y patch ademas de definir valores como lo haria ref y reactive
    excerpt: props.note.excerpt,
    content: props.note.content,
});

/*
Usa reactive cuando tengas una colección de valores y esta deba ser reactiva. Por ejemplo un objeto con la información de un usuario, metadatos o los campos de un formulario. Eso sí, recuerda que debes ceñirte a valores compuestos y asegurarte de guardar siempre la referencia al objeto original para no perder reactividad.
Usa ref cuando quieras tener piezas de estado más pequeñas que deban ser reactivas. Por ejemplo un flag que indique si hay auth o no (ej: isAuth), el nombre del usuario conectado o el total a pagar de un carrito de la compra. Ten en cuenta que aunque ref es más polivalente tendrás que usar value ( igual pronto ya no es así) y si lo utilizas con un objeto… al final estás usando reactive, con todo lo que conlleva.
*/

</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Modulo de Notas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="p3-4 sm:px0">
                            <h1 class="text-lg text-gray-900">Editar una nota</h1>
                            <p class="text-sm text-gray-600"> Si editas no podras volver al estado anterior</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                           <form>
                                <label class="block font-medium text-sm text-gray-700">Resumen</label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.excerpt"
                                ></textarea>
                                <!--el v-model sirve para conectarse directamente con la variable con la data y es de dos caminos osea que mientras escribamos en el text area vue se encargara de cambiar el valor del excerpt y a la ves lo pone dentro del text area por eso se llama two way data binding conexion de datos de dos caminos en español-->

                                <label class="block font-medium text-sm text-gray-700">Contenido</label>
                                <textarea 
                                    class="form-input w-full rounded-md shadow-sm"
                                    v-model="form.content"
                                    rows="8"
                                ></textarea>
                                <!--el v-model sirve para conectarse directamente con la variable con la data y es de dos caminos osea que mientras escribamos en el text area vue se encargara de cambiar el valor del excerpt y a la ves lo pone dentro del text area por eso se llama two way data binding conexion de datos de dos caminos en español-->
                                <button 
                                    class="bg-blue-500 hover:bg-blue700 text-white font bold py-2 px-4 rounded-md"
                                    >Editar</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

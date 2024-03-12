<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    notes: Array, //definiemos notes que es un array que viene del controlador notecontroller, enviandolo con el render de inertia de laravel
});
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
                            <h1 class="text-lg text-gray-900">Listado de notas</h1>
                            <p class="text-sm text-gray-600">Toma el registro correcto y ejecuta cualquier funcion, ver, editar o eliminar</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <table>
                                <tr v-for="note in notes">
                                    <td class="border px-4 py-2">
                                        {{ note.excerpt }} <!-- comoen laravel podemos usar doble {{ }} para colocar javascript pero en este caso solo usamos el notes que enviamos a vuejs y usamos el excerpt que viene de la base de datos y de eloquent-->
                                    </td>
                                    <td class="px-4 py-2">
                                        <Link :href="route('notes.show', note.id)"> <!-- para usar las rutas en vue tenemos que usar un componente de inertia y asi podemos usar las rutas ya que estan creadas en laravel, ya con esto podemos usar un metodo de vue que es igual que laravel llamado route para enviarnos a una ruta de laravel, tambien podemos pasarle valores a la ruta pero en este caso no pasaremos todo el objeto si no que solo el id, ya que por mi investigacion lo que hace realmente laravel cuando se envia un objeto es tomar el id y el ya toma el objeto con este id-->
                                            Ver
                                        </Link>
                                    </td>
                                    <td class="px-4 py-2">
                                        <!--
                                            <inertia-link :href="route('notes.edit', note.id)"> //antes se usaba inertia-link pero ahora toca importar una nueva libreria llamada Link de inertia de vue3 y cambiar inertia-link por link por eso esta comentado esto
                                                Editar
                                            </inertia-link>
                                        -->
                                        <Link :href="route('notes.edit', note.id)"> <!-- para usar las rutas en vue tenemos que usar un componente de inertia y asi podemos usar las rutas ya que estan creadas en laravel, ya con esto podemos usar un metodo de vue que es igual que laravel llamado route para enviarnos a una ruta de laravel, tambien podemos pasarle valores a la ruta pero en este caso no pasaremos todo el objeto si no que solo el id, ya que por mi investigacion lo que hace realmente laravel cuando se envia un objeto es tomar el id y el ya toma el objeto con este id-->
                                            Editar
                                        </Link>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

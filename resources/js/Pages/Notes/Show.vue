<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    note: Object, // definimos note como Object de en vez de array por que lo que vamos a recibir es un unico valor y es un objeto, esto se define por que viene del controlador NoteController 
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
                            <h1 class="text-lg text-gray-900">Detalle de una nota</h1>
                            <p class="text-sm text-gray-600">{{ note.excerpt }} <!-- como en laravel podemos usar doble {{ }} para colocar javascript pero en este caso solo usamos el notes que enviamos a vuejs y usamos el excerpt que viene de la base de datos y de eloquent--></p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                           <p>{{ note.content }}</p>
                           <hr class="my-6">
                           <Link :href="route('notes.index')">Volver</Link> <!-- para usar las rutas en vue tenemos que usar un componente de inertia y asi podemos usar las rutas ya que estan creadas en laravel, ya con esto podemos usar un metodo de vue que es igual que laravel llamado route para enviarnos a una ruta de laravel aunque aparezca error en el ide realmente funciona bien sin ningun error es problema del ide-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

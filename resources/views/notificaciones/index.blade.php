<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notificaciones')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b text-gray-900">
                    <h1 class="text-2xl font-bold text-center my-10">Mis Notificaciones</h1>

                    <div class="divide-y divide-gray-200">
                        @forelse ( $notificaciones as $notificacion)

                        <div class="p-5 lg:flex lg:justify-between lg:items-center">
                            <div>
                                <p class="">Tienes un nuevo candidato en:</p>
                                <span class="font-bold">{{ $notificacion->data['nombre_vacante'] }}</span>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans() }}</span>
                                </p>
                            </div>

                            <div class="mt-5 lg:mt-0">
                                <a href="{{ route('candidatos.index' , $notificacion->data['id_vacante']) }}" class="bg-indigo-500 p-3 text-sm uppercase font-bold text-white rounded-lg">
                                    Ver candidatos
                                </a>
                            </div>
                        </div>

                        @empty
                        <div class="text-center text-gray-600">
                            No hay Notificaciones Nuevas.
                        </div>
                        @endforelse

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
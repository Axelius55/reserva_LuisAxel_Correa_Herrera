<x-app-layout>
    <div class="flex justify-center items-center min-h-[75vh] mt-10">
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $reserva->nombre_sala }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fecha de reserva: {{ $reserva->fecha_reserva }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hora de inicio: {{ $reserva->hora_inicio }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hora fin: {{ $reserva->hora_fin }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nombre del cliente: {{ $reserva->nombre_cliente }}</p>

            <a href="{{ route('reservas.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Regresar
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <form action="{{ route('reservas.destroy', ['reserva' => $reserva->id]) }}" method="POST" class="mt-4" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta reserva?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>


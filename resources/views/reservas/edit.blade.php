<x-app-layout>
    <div class="container mt-5">
        <h1 class="text-4xl text-gray-900 dark:text-white mb-4">Editar Reserva</h1>
        <a type="button" href="{{ route('reservas.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Regresar</a>

        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Necesario para que el formulario use PUT -->

            <div class="mb-4">
                <label for="nombre_sala" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre de la Sala</label>
                <input type="text" name="nombre_sala" id="nombre_sala" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $reserva->nombre_sala }}" required>
            </div>

            <div class="mb-4">
                <label for="fecha_reserva" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Fecha de Reserva</label>
                <input type="date" name="fecha_reserva" id="fecha_reserva" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $reserva->fecha_reserva }}" required>
            </div>

            <div class="mb-4">
                <label for="hora_inicio" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hora de Inicio</label>
                <input type="number" name="hora_inicio" id="hora_inicio" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="0" max="23" value="{{ $reserva->hora_inicio }}" required>
            </div>

            <div class="mb-4">
                <label for="hora_fin" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Hora Fin</label>
                <input type="number" name="hora_fin" id="hora_fin" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" min="0" max="23" value="{{ $reserva->hora_fin }}" required>
            </div>

            <div class="mb-4">
                <label for="nombre_cliente" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre del Cliente</label>
                <input type="text" name="nombre_cliente" id="nombre_cliente" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $reserva->nombre_cliente }}" required>
            </div>

            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Actualizar Reserva</button>
        </form>
    </div>
</x-app-layout>

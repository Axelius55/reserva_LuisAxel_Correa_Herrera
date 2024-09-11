<x-app-layout>
    <div class="mb-2"></div>

    <p class="text-4xl text-gray-900 dark:text-white mb-4">Listado de Reservas</p>
    <!-- Botón para crear una nueva reserva -->
    <a href="{{ route('reservas.create') }}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Crear</a>
    
    <div class="container mt-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nombre de la sala</th>
                        <th scope="col" class="px-6 py-3">Fecha de reserva</th>
                        <th scope="col" class="px-6 py-3">Hora de inicio</th>
                        <th scope="col" class="px-6 py-3">Hora fin</th>
                        <th scope="col" class="px-6 py-3">Nombre del cliente</th>
                        <th scope="col" class="px-6 py-3 text-right">Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservas as $reserva)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $reserva->nombre_sala }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $reserva->fecha_reserva }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reserva->hora_inicio }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reserva->hora_fin }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $reserva->nombre_cliente }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('reservas.edit', ['reserva' => $reserva->id]) }}" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>

                        <td class="px-6 py-4 text-right">
                            <!-- Botón "Ver" -->
                            <a href="{{ route('reservas.show', ['reserva' => $reserva->id]) }}" class="ml-2 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ver</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div class="mt-4">
                {{ $reservas->links() }}
            </div>
        </div>
    </div>
    <br>
</x-app-layout>


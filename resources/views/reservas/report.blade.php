<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Reservas</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Reporte de Reservas</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre de la Sala</th>
                <th>Fecha de Reserva</th>
                <th>Hora de Inicio</th>
                <th>Hora Fin</th>
                <th>Nombre del Cliente</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->nombre_sala }}</td>
                    <td>{{ $reserva->fecha_reserva }}</td>
                    <td>{{ $reserva->hora_inicio }}</td>
                    <td>{{ $reserva->hora_fin }}</td>
                    <td>{{ $reserva->nombre_cliente }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

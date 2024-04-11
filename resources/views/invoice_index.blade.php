<!-- resources/views/invoices/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Facturas</title>
</head>
<body>
    <h1>Lista de Facturas</h1>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td>
                        
                    </td>
                    <td>{{ $invoice->fecha }}</td>
                    <td>{{ $invoice->total }}</td>
                </tr>
                <td>
                    <a href="{{ route('invoices.show', $invoice->id) }}">Mostrar</a> <!-- Enlace para mostrar detalles -->
                </td>
            @endforeach
        </tbody>
    </table>
</body>
</html>


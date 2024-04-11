<!-- resources/views/invoices/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Factura</title>
</head>
<body>
    <h1>Nueva Factura</h1>
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div>
            <label for="cliente_nombre">Nombre del Cliente:</label>
            <input type="text" id="cliente_nombre" name="cliente[nombre][]" required>
        </div>
        <div>
            <label for="codigo_nombre">Nombre del Cliente:</label>
            <input type="text" id="codigo_nombre" name="codigo[nombre][]" required>
        </div>
       
        <button type="button" id="agregar_cliente">Agregar Cliente</button>
        <!-- Puedes agregar más campos del cliente aquí si es necesario -->
        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
        </div>
        <div>
            <label for="total">Total:</label>
            <input type="number" id="total" name="total" step="0.01" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <script>
        document.getElementById('agregar_cliente').addEventListener('click', function() {
            var clienteDiv = document.createElement('div');
            clienteDiv.innerHTML = `
                <div>
                    <label for="cliente_nombre">Nombre del Cliente:</label>
                    <input type="text" id="cliente_nombre" name="cliente[nombre][]" required>
                </div>
                <div>
                    <label for="codigo_nombre">Nombre del codigo:</label>
                    <input type="text" id="codigo_nombre" name="codigo[nombre][]" required>
                </div>
            `;
            document.querySelector('form').insertBefore(clienteDiv, this);
        });
    </script>
</body>
</html>

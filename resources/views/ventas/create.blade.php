<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <h1 class="text-center">REGISTRO DE VENTAS</h1>
    <a href="{{ route('ventas.index') }}" class="btn btn-danger mt-3">regresar</a>
    <div class="container mt-2">
        <h1>Ingresar datos de la nueva venta</h1>
        
        <!-- Mostrar mensajes de éxito -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <!-- Formulario -->
            <form action="{{ route('ventas.create') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="producto" class="form-label">Producto</label>
                    <input type="text" name="producto" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" name="precio" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
    </div>
</body>
</html>

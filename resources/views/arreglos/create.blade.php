<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Pagina de crear nuevo arreglo
    </h1>
    <a href="{{ route('arreglos.index') }}" class="btn btn-danger">regresar</a>
    <div class="container mt-2">
        <h1>Ingresar datos del arreglo</h1>
        
        <!-- Mostrar mensajes de éxito -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <!-- Formulario -->
        <form action="{{ route('arreglos.create') }}" method="Get">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">nombre</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" required>
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" required>
                <label for="" class="form-label">Descrpción</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

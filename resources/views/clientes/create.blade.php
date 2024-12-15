<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Pagina de crear nuevo cliente</h1>
    <a href="{{ route('welcome') }}" class="btn btn-danger">regresar</a>
    <div class="container mt-2">
        <h1>Ingresar datos del Cliente</h1>
        
        <!-- Mostrar mensajes de éxito -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <!-- Formulario -->
        <form action="{{ route('clientes.create') }}" method="Get">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nombre</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                <label for="" class="form-label">Apellido</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                <label for="" class="form-label">Dni</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                <label for="" class="form-label">Telefono</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
                <label for="" class="form-label">Dirección</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>

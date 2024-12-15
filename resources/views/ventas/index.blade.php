<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>Pagina de Ventas</h1>
    <a href="{{ route('welcome') }}" class="btn btn-danger mb-3">regresar</a>
     <a href="{{ route('ventas.create') }}" class="btn btn-primary mb-3">Agregar Venta</a>


     <table class="table table-striped table-bordered">
         <thead class="table-dark">
             <tr>
                 <th>ID</th>
                 <th>Producto</th>
                 <th>Cantidad</th>
                 <th>Precio</th>
                 <th>Fecha de Creación</th>
                 <th>Acciones</th>
             </tr>
         </thead>
         
     </table>
 </div>
</body>
</html>

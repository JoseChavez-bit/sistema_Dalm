<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Personalizados Dalm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('clientes.index') }}">Clientes</a></li>
                        <li><a class="dropdown-item" href="{{ route('arreglos.index') }}">Arreglos</a></li>
                        <li><a class="dropdown-item" href="{{ route('ventas.index') }}">Ventas</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/img1.jpeg" class="d-block w-100" alt="Imagen 1">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/img2.jpeg" class="d-block w-100" alt="Imagen 2">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagenes/img3.jpeg" class="d-block w-100" alt="Imagen 3">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
</div>


<div class="container mt-5">
    <section id="nosotros">
        <h2 class="text-center">Sobre Nosotros</h2>
        <p class="text-center">Sabemos lo importante que es reflejar tu personalidad 
            en cada detalle,<br> por eso te ofrecemos productos personalizados hechos a 
            tu gusto. <br>Ya sea que busques un regalo especial o algo único para ti, <br>
            estamos aquí para ayudarte a crear lo que imaginas<br> con la más alta calidad 
            y dedicación.</p>
    </section>

    <section id="servicios" class="mt-6">
        <h2 class="text-center">Nuestros Servicios</h2>
        <div class="row text-center">
            <div class="col-md-3">
                <h4>Arreglos florales</h4>
                <p>Descripción breve del servicio 1.</p>
            </div>
            <div class="col-md-3">
                <h4>Box Personalizados</h4>
                <p>Descripción breve del servicio 2.</p>
            </div>
            <div class="col-md-3">
                <h4>Tendencias</h4>
                <p>Descripción breve del servicio 3.</p>
            </div>
            <div class="col-md-3">
                <h4>Ocaciones</h4>
                <p>Descripción breve del servicio 4.</p>
            </div>
        </div>
    </section>
    <section id="contacto">
        <h2 class="text-center">Contacto</h2>
        <p class="text-center">Jr. Chincha Alta N°331</p>
        <p class="text-center">personalizadosdalm@outlook.com</p>
        <p class="text-center">+51 923 382 473 o +51 990 530 044</p>
    </section>
</div>


<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; 2024 Personalizados Dalm. Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

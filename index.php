<!DOCTYPE html>
<html lang="es">
<head>
    <title>Restaurantes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap CSS v5.2.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
    <!-- Sección de menú navegación -->
    <nav id="inicio" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i>Restaurant La sombra</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menú del día</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#chef">Chefs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonio">Testimonio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#horario">Horario</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Sección de banner -->
<section id="banner" class="container-fluid p-0">
    <div class="banner-img" style=" background-image: url('imagen/slider-image2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover; height: 50vh; /* Asegura que el banner ocupe toda la altura de la pantalla */">
        <div class="banner-text" style="position: absolute; top: 50%;left: 50%; transform: translate(-50%, -50%);color: white; /* Color de texto para que sea visible sobre la imagen */text-align: center; /* Centra el texto */">
            <h1>La Sombra</h1>
            <p>Restaurant del mejor sabor casero</p>
            <a href="#menu" class="btn btn-primary">Ir al Menú</a>
        </div>
    </div>
</section>

    
    
<!-- Sección de Bienvenida -->
     <section id="bienvenida" class="container mt-4 text-center">
        <div class="jumbotron bg-dark text-white">
            <br/>
            <h2>¡Bienvenid@ al Restaurant La sombra!</h2>
            <p>Descubre una experiencia gastronómica única y emocionante en el corazón de la ciudad.</p>
            <br/>
        </div>
    </section>

    
 <!-- Sección de chefs -->
 <section id="chef" class="container mt-4 text-center">
        <h2>¿Quiénes son nuestros chefs?</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/colaboradores/Chef.jpg" alt="Chef" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Chef 1</h5>
                        <p class="card-text">La chef Marisa</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repetir para los otros chefs -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/colaboradores/Chef.jpg" alt="Chef" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Chef 1</h5>
                        <p class="card-text">La chef Marisa</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repetir para los otros chefs -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/colaboradores/Chef.jpg" alt="Chef" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Chef 1</h5>
                        <p class="card-text">La chef Marisa</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-dark me-2"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Repetir para los otros chefs -->       
        </div>
    </section>

    



    <!-- Sección de testimonios -->
    <section id="testimonios" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Testimonios</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="card-text">Muy buena comida</p>
                        </div>
                        <div class="card-footer text-muted">Welinton Burgos Uh</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="card-text">Excelente servicio</p>
                        </div>
                        <div class="card-footer text-muted">Carlos Sánchez</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section id="menu" >
        </section>
        <h2 class="container text-center">Menú (nuestras ofertas o recomendación)</h2>

     <!-- Sección de comida -->
      <section id="comida" class="bg-light py-5">

    <!-- Footer -->
    <footer class="bg-dark text-light text-center p-2 mt-2">
        <p>&copy; 2025 Restaurant La Sombra, todos los derechos reservados.</p>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujFuCZSmKbSSUnQ1mh/jp3" crossorigin="anonymous"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--boostrap CSS--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style-index.css') }}"> 
    
</head>
<body>
   
<!--navbard-->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#"><img src="img/Logo_reducido.png" alt=""></a>
    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/Logo_reducido.png" alt=""></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
          <span class="navbar-toggler-icon">
              <div class="custom-toggler-cerrar-icon">
                  <img src="img/icono.cerrar.svg" alt="">
              </div>
          </span>
        </button>
        
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#inicio">Inicio<span class="barra"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#sobre nosotros">Sobre nosotros<span class="barra"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-4" href="#servicios">Servicios<span class="barra"></span></a>
          </li>
          <!-- Otros elementos de navegación -->
        </ul>
      </div>
    </div>
    <a href="{{ url('/register') }}" class="login-button">Registrarse</a>
    <a href="{{ url('/login') }}" class="sign-button">Iniciar Sesión</a>
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
          <div class="custom-toggler-icon">
              <img src="img/icono.menu.svg" alt="">
          </div>
      </span>
    </button>
  </div>
</nav>
      <!--End Navbar-->

      <!--hero section-->
       <section class="hero-section" id="inicio">
    <!--star slider-->
    <div class="row">
      <div class="fondo" >
      <div class="col-sm-12">
  <section class="slider" >
      <div class="container justify-content-between">
      <div class="slider__content contenedor px-5">
          <img src="img/left-arrow-alt-regular-48.png" class="slider__arrow flecha_izq" id="before">

          <section class="slider__body slider__body--show py-5" data-id="1">
              <div class="col-12 ">
              <div class="slider__texts">
                  <h2 class="subtitle d-none d-md-flex"> Mi nombre es Jordan Alexander</h2>
                  <p class="slider__review d-none d-xl-flex">
                  Mi objetivo es asegurarme de que todas tus pertenencias lleguen a su nuevo destino de manera segura y sin problemas
                  </p>
              </div>
              </div>

              <figure class="slider__picture">
                  <img src="img/1.jpg" class="slider__img">
              </figure>
          </section>

          <section class="slider__body" data-id="2">
              <div class="slider__texts">
                  <h2 class="subtitle d-none d-md-flex"> Mi nombre es Alejandra Perez</h2>
                  <p class="slider__review d-none d-xl-flex">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nesciunt odio, nihil quibusdam autem nam in veritatis voluptas nobis.
                  </p>
              </div>

              <figure class="slider__picture">
                  <img src="img/2.jpg" class="slider__img">
              </figure>
          </section>

          <section class="slider__body" data-id="3">
              <div class="slider__texts ">
                  <h2 class="subtitle d-none d-md-flex"> Mi nombre es Pablo Gonzales</h2>
                  <p class="slider__review d-none d-xl-flex">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quis accusantium perferendis vel cumque illum quia totam repellendus!
                  </p>
              </div>

              <figure class="slider__picture">
                  <img src="img/3.jpg" class="slider__img">
              </figure>
          </section>

          <section class="slider__body" data-id="4">
              <div class="slider__texts ">
                  <h2 class="subtitle d-none d-md-flex">Mi nombre es Pablo Gonzales 4</h2>
                  <p class="slider__review d-none d-xl-flex">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quis accusantium perferendis vel cumque illum quia totam repellendus!
                  </p>
              </div>

              <figure class="slider__picture flecha">
                  <img src="img/4.jpg" class="slider__img ">
              </figure>
          </section>

          <img src="img/right-arrow-alt-regular-48.png" class="slider__arrow flecha" id="next">
      </div>
  </section>
  </div>
  </div>
  </div>
</div>    
  </section>
  <!-- End Slider -->
  <!-- Nosotros -->
  <section class="home flex-center" id="sobre nosotros">
    <div class="home-container">
      <div class="info">
        <h2>Sobre Nosotros</h2>
        <h3>Somos Snap!</h3>
        <p>Snap es una página dirigida a conductores y usuarios que requieran de una mudanza rápida, de confianza y efectiva donde existan una variedad de ofertas, además de que tanto el conductor como el cliente tengan una contratación bilateral.</p>
        <a href="#" class="btn">¡Inicia ya!<i class="fas fa-arrow-circle-right"></i></a>
      </div>
      <div class="home-img">
        <img src="img/Diseño sin título.jpg" alt="">
      </div>
    </div>
    <a href="#localidades" class="scroll-down">Scroll Down<i  class="fas fa-arrow-down"><img src="img/scroll-down.svg" alt="#localidades"></i></a>
  </section>
  <hr class="p-5">
  
<!-- Localidades -->
<section class="localidades" id="localidades" >
  <div class="container flex-center">
    <h1 class="section-title-01">localidades</h1>
    <h2 class="section-title-02">localidades</h2>
    </div>
    
  </div>
</section>
<div class="localidades-img">
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="loc usme">
        <p class="loc__name"><b>Usme</b></p>
        <img src="{{ asset('img/Localidades/usme.jpg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc bosa">
        <p class="loc__name"><b>Bosa</b></p>
        <img src="{{ asset('img/Localidades/Bosa.jpg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc suba">
        <p class="loc__name"><b>Suba</b></p>
        <img src="{{ asset('img/Localidades/Suba.jpg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc kenedy">
        <p class="loc__name"><b>Kennedy</b></p>
        <img src="{{ asset('img/Localidades/kenedy.jpeg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc fontibon">
        <p class="loc__name"><b>Fontibon</b></p>
        <img src="{{ asset('img/Localidades/fontibon.jpg') }}">
        
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc santa_fe">
        <p class="loc__name"><b>Santa Fe</b></p>
        <img src="{{ asset('img/Localidades/santa_fe.jpg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc chapinero">
        <p class="loc__name"><b>Chapinero</b></p>
        <img src="{{ asset('img/Localidades/chapinero.jpg') }}">
      </div>
    </div>
  
    <div class="col-sm-6 col-md-3">
      <div class="loc teusaquillo">
        <p class="loc__name"><b>Teusaquillo</b></p>
        <img src="{{ asset('img/Localidades/teusaquillo.jpg') }}">
      </div>
    </div>
  </div>
</div>



<!--end localidades-->
<!--servicios-->
<section class="servicios" id="servicios" >
  <div class="container flex-center">
    <h1 class="section-title-01">servicios</h1>
    <h2 class="section-title-02">Servicios</h2>
    </div>
</section>

<div class="container-serv py-4">
  <div class="card">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="img-fluid card-img" src="img/imagen,servicio-1.jpg" alt="">
      </div>

      <div class="col-lg-6">
        <div class="card-body">
          <h1 class="h5 card-title">¿Eres conductor?</h1>
          <h2 class="h6 card-subtitle text-muted mb-3">Ofrece tus servicios como conductor</h2>
          <button class="btn ">Regístrate ya!</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Repite esta estructura para cada tarjeta -->
  
  <div class="card">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="img-fluid card-img" src="img/imagen,servicio-2.jpg" alt="">
      </div>

      <div class="col-lg-6">
        <div class="card-body">
          <h1 class="h5 card-title">¿Quieres realizar una Mudanza?</h1>
          <h2 class="h6 card-subtitle text-muted mb-3">Inicia administrando y gestionandola con nosotros. </h2>
          <button class="btn ">Regístrate ya!</button>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <img class="img-fluid card-img" src="img/imagen,servicio-3.jpg" alt="">
      </div>

      <div class="col-lg-6">
        <div class="card-body">
          <h1 class="h5 card-title">¿Necesitas ingresos rapidos?</h1>
          <h2 class="h6 card-subtitle text-muted mb-3">Ofrece tus servicios, siendo parte de un quipo de mudanza</h2>
          <button class="btn ">Regístrate ya!</button>
        </div>
      </div>
    </div>
  </div>
</div>
     <!-- End Servicios -->
     <fooetr>
      <div class="footer my-5">
          <div class="cont">
              <div class="row">
                  <div class="col-12 Justify-content-center ">
                      <div class="footer_logo lead">
                         <div id="logo">
                          <a href="#"><img src="img/Logo_FINAL_blanco.png" alt="logo" class="footer_logo"
                          ></a>
                          </div>
                      </div>
                      <div class="address">
                       <div class="col-sm-12 col-md-6 ">
                           <p class="telefono"><img src="img/telefono.png"><b>302 785 2697</b></p>
                       </div>
                       <div class="col-sm-12 col-md-6 ">
                          <p class="telefono"><img src="img/Sobre.png"><b>Snap.mudanzas@hotmail.com</b></p>
                       </div>
                      </div>
                  <div class="redes_sociales d-none d-lg-flex">
                    <div class="col-sm-12 col-md-4 ">
                      <img  class="redes" src="img/redes/facebook-circle-logo-24.png">
                    </div>
                    <div class="col-sm-12 col-md-4">
                      <img class="redes" src="img/redes/instagram-logo-24.png">
                    </div>
                    <div class="col-sm-12 col-md-4">
                      <img class="redes" src="img/redes/twitter-logo-24.png">
                    </div>
                  </div>
              </div>
              </div>
          </div>

          <div class="row">
         <div class="col-12">
          <div class="copyright">
              <div class="cont ">
                  <p>© 2024 Snap 
              </div>
          </div>
          </div>
      </div>
  </div>

  </fooetr>
  <!-- end footer -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Slider JS -->
<script src="{{asset('js/slider.js') }}"></script>

      <!-- end hero section-->
 <!--Botatrap js-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
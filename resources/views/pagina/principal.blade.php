<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .whatsapp {
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:10px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  z-index:100;
}

.whatsapp-icon {
  margin-top:13px;
}

ion-icon {
  font-size: 64px;
}
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg bg-info bg-opacity-25 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Scuishy Partys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#redes">Redes</a>
        </li>
    </div>
  </div>
</nav>
<!--carrusel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" id="inicio">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../resources/views/img/portada1.png" class="d-block w-100" alt="portada1">
    </div>
    <div class="carousel-item">
      <img src="../resources/views/img/portada2.png" class="d-block w-100" alt="portada2">
    </div>
    <div class="carousel-item">
      <img src="../resources/views/img/portada3.png" class="d-block w-100" alt="portada3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <div>
        <div class="container" id="nosotros">
            <div class="row">
              <h2 class="text-center">Quienes Somos</h2>
                <div class="col-md-8">
                    <br>
                <p>
Brindamos servicio de alquiler de mobiliario, organización y decoración de eventos: cumpleaños, bautizos, primera comunión, baby shower, bodas, y todo lo que quieras celebrar.
Todas tus ideas para tus eventos nosotros podemos hacerlo realidad.</p>
<p>Nuestra mision es hacer tus eventos lo mas espectacular posibles para que pases 
  el mejor dia de tu vida y celebres a lo grande con tus seres queridos
</p>
<p>🥳Decoraciones y eventos Scuishi Partys 🎉
🎈Celebra con nosotros tu momento especial y hazlo inolvidable
🎈Decoramos todo tipo de eventos</p>
                </div> 
                <div class="col-md-4">
                    <br>
                    <img class="img-fluid" src="../resources/views/img/nosotros.png" alt="nosotros">
                </div> 
            </div>
        </div>
    </div>
    <br>
    <div>
        <div class="container">
            <div class="row">
                <h2 class="text-center" id="servicios">Nuestros Servicios</h2>
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img/servicio1.png" alt="servicio1">
                      <div class="card-body">
                        <h4 class="card-title text-center">Pedida de Mano</h4>
                      </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img/servicio2.png" alt="servicio2">
                      <div class="card-body">
                        <h4 class="card-title text-center">Fiesta Infantiles</h4>
                      </div>
                    </div>
                    <br>
                </div> 
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img/servicio3.png" alt="servicio3">
                      <div class="card-body">
                        <h4 class="card-title text-center">Quinceañeros</h4>
                      </div>
                    </div>
                    <br>
                </div> 
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img/servicio4.png" alt="servicio4">
                      <div class="card-body">
                        <h4 class="card-title text-center">Graduaciones</h4>
                      </div>
                    </div>
                    <br>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img//servicio5.png" alt="servicio5">
                      <div class="card-body">
                        <h4 class="card-title text-center">Fiesta de 50 años</h4>
                      </div>
                    </div>
                    <br>
                </div>  
                <div class="col-md-4">
                    <div class="card text-white bg-primary bg-opacity-50">
                      <img class="card-img-top" src="../resources/views/img/servicio6.png" alt="servicio6">
                      <div class="card-body">
                        <h4 class="card-title text-center">Cumpleaños</h4>
                      </div>
                    </div>
                    <br>
                </div>  
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Clic aqui para reservar tu evento
</button>

<!-- Modal -->
<div class="modal fade bg-dark bg-opacity-75" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-primary bg-opacity-85">
      <div class="modal-header">
        <h5 class="modal-title text-light" id="exampleModalLabel">Reservar un Evento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('servicios.index') }}" method="POST" >
        @csrf
        <div class = "form-group">
        <label class="text-light" for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar su nombre">
        <label class="text-light" for="apellido">Apellido:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar su Apellido">
        <label class="text-light" for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Ingresar su Email">
        <br>
        <select class="form-select" aria-label="Default select example" id="evento" name="evento">
            <option selected disabled>Tipo de Evento</option>
            <option value="Fiesta 50 años">Fiesta 50 años</option>
            <option value="Baby Shower">Baby Shower</option>
            <option value="Graduacion">Graduacion</option>
            <option value="Fiesta Infatil">Fiesta Infatil</option>
            <option value="Pedida de Mano">Pedida de Mano</option>
            <option value="Quinceañeros">Quinceañeros</option>
        </select>
        <br>
        <label class="text-light" for="fecha">Fecha que lo requiere:</label>
        <input type="date" class="form-control" id="fecha" name="fecha">
        <br>
        <button type="submit" class="btn btn-danger" id="btn">Enviar</button>
        </form>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div> 
            </div>
        </div>
    </div>
    <br>
    <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fapi.whatsapp.com%2Fsend%3Fphone%3D51980680842%26app%3Dfacebook%26entry_point%3Dpage_cta%26fbclid%3DIwAR1w4ZdjQClobkwBtaEQPOE4yUgDy2sTM5jqo2z8rV9fFGvzC9kERtuBufE&h=AT0XwUvJy-Yu8ELhadU3CZExc6BStYHexKJND-EMbwwHRYbqOpXSkuCDOFyfhiSwqBODRPjNv25OVvw0guz3SWP4mMam2oKW2SwpC3Gf7NOHSmKsnS4SUOpRckoyfo4AFtxCHw" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>

    <br>
    <div>
        <div class="container" id="redes">
            <div class="row d-flex justify-content-center">
              <br>
              <h2 class="text-center">Nuestras Redes Sociales</h2>
              <br>
                <div class="col-md-4 d-flex justify-content-center">
                  <br>
                  <br>
                  <a href="https://www.facebook.com/Scuishipartys">
                  <ion-icon name="logo-facebook"></ion-icon>
                  </a>
                </div> 
                <br>
                <div class="col-md-4 d-flex justify-content-center">
                  <br>
                  <br>
                  <a href="https://www.facebook.com/Scuishipartys">
                  <ion-icon name="logo-tiktok"></ion-icon>
                  </a>
                </div> 
                <br>
                <div class="col-md-4 d-flex justify-content-center">
                  <br>
                  <br>
                  <a href="https://www.facebook.com/Scuishipartys">
                  <ion-icon name="logo-instagram"></ion-icon>
                  </a>
                </div> 
            </div>
        </div>
    </div>
    <br><br>
    <footer class="bg-primary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3 text-light" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class=" text-light" href="https://mdbootstrap.com/">BD</a>
  </div>
  <!-- Copyright -->
</footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src=
        "https://code.jquery.com/jquery-3.6.0.min.js"
        integrity=
"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                alert("DATOS ENVIADO CORRECTAMENTE");
            });
        });
    </script>
  </body>
</html>
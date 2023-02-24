<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    
    
    
    <title>Document</title>
</head>
<body>
     <!--<h1> Etec Burguer - Inicio</h1>
   <a href="{{route('inicio')}}">inicio</a><br>    
    <a href="{{route('sobre')}}">Sobre</a><br> 
    <a href="{{route('contato')}}">Contato</a>-->

<nav class="navbar navbar-expand-lg bg-danger navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EtecBurguer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('inicio')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contato')}}">Contato</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/banner1.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner2.jpeg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/banner3.jpeg')}}"class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
     
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 <div class="bg-danger text-white text-center p-2">
     <h3> O MELHOR HAMBURGUER DO BRASIL!</h3>
 </div>
  
 <div class="container-fluid">
  <div class="row mt-2 ">

    <div class="col-sm-3">
    <div class="card" style="width;">
        <img src="{{ asset('img/cheddar.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Cheddar</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-danger">Go somewhere</a>
    </div>
 </div>
</div>

<div class="col-sm-3">
    <div class="card" style="width;">
        <img src="{{ asset('img/cheeseburguer.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Cheeseburguer</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-danger">Go somewhere</a>
    </div>
 </div>
</div>

<div class="col-sm-3">
    <div class="card" style="width;">
        <img src="{{ asset('img/costela.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Costela</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-danger">Go somewhere</a>
    </div>
 </div>
</div>

<div class="col-sm-3">
    <div class="card" style="width;">
        <img src="{{ asset('img/egg.jpeg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">EGG</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-danger">Go somewhere</a>
    </div>
 </div>
</div>









  
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
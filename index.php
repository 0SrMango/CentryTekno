<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <title>CentryTekno</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
   
<div class="jumbotron jumbotron-fluid text-center">
    
    <h1>CentryTekno</h1>
    <h2>Inicio</h2>
    
</div>
  
  <br>
  <br>
  
<div class="container">
    
     <ul class="nav nav-tabs nav-justified">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="productos.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contactanos</a>
  </li>
</ul> 

<br>
<br>
<br>



<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" alt="Chicago">
      <div class="carousel-caption">
          <h1>Mango</h1>
          <p>Es genial</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>



</div>    
    

  

    
</div>
  
  <br>
  <br>
  
  <div class="jumbotron">
     <center>
      <div class="card-deck">
         
          <div class="card bg-secondary">
            <div class="card-body">
              <p class="card-text text-center">Te puede interesar</p>
              <center>
              
              <?php
                
                  
                  
                  $img_preview_num = ['1.png','1a.png','1b.png','2.png'];
                  
                  $rand_img_preview_num = array_rand($img_preview_num);
                  
                  $img_preview = "img/Img/" . $img_preview_num[$rand_img_preview_num];
                  
                  
                  
                  
                  echo "<img src='$img_preview' alt='' width='20%'>";
              ?>
              
              
              
              
              
              </center>
              <br>
              <form action="productos.php">
                  
                  <input type="submit" class="btn btn-outline-light" value="Ver Producto">
                  
              </form>
              
            </div>
          </div>
          
          <div class="card bg-secondary">
            <div class="card-body">
              <h5 class="card-text text-center">Contactanos</h5>
              <br>
              <br>
              <p class="card-text text-center"> Telefono: +57 305 4636019</p>
              <br>
              <p class="card-text text-center"> Email: luciosaavedram@gmail.com </p>
              <br>
           
             
            </div>
          </div>
  
      </div>
      </center>
  </div>
   
    
</body>
</html>
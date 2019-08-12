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
    <h2>Productos</h2>
    
</div>
  
  <br>
  <br>
  
  <div class="container">
    
     <ul class="nav nav-tabs nav-justified">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="productos.php">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contactanos</a>
  </li>
                  </ul>
                  </div>
                  
                  <br>
                  <br>
                  <br>
  
  <div class="container">
  <div class="card-column">
         
         
         
          
              
              
              <?php
      
      
        
                
                  
      
              for ($i = 0; $i <= 3; $i++) {
    
                  $img_preview_num = ['1.png','1a.png','1b.png','2.png'];
                  
                  $name_product = ['Smart_Watch_1','Smart_Watch_2','Smart_Watch_3','Smart_Watch_4'];
                  
                  $img_preview = "img/Img/" . $img_preview_num[$i];
                  
                  
                  
                  
             echo"     <div class='card bg-secondary' style='width: 20%'>
            <div class='card-body'>
              <p class='card-text text-center'>$name_product[$i]</p>
              <center>
              <img src='$img_preview' alt='' width='70%'>
              
              <button class='btn btn-outline-light' title='$name_product[$i]' data-toggle='popover' data-placement='right' data-content='Descripcion'>See Profile</button>
              
              <br>
                        
                        
                        
                        </center>
                        </div>
                        
          </div>
          <br>";}
      
            
          ?>
          <br>
          
          
  
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
              <input type="submit" class="btn btn-outline-light" value="Ver Producto">
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
   
    <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
    
</body>
</html>
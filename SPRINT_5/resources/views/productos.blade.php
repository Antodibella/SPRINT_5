@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Productos - Tecno Movil </title>
</head>
<body>
   
    <!--  SECCION  -->
    <section>
    <br><br>
    <div  class="row">
        
      <section>
        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
                <div class="col-md-4 col-lg-3">
                    <a href="producto?id=<?=$producto['id']?>"><img src="{{-- mostrar imagen db --}}" alt="logotipo" class="img-fluid" width="300px"></a> 
                    <a href="producto?id=<?=$producto['id']?>"><h2><?=$producto['modelo']?></h2></a>
                    <p>ARS <?=$productos['precio']?></p>
                
                </div>
            <?php endforeach; ?>
           
            
        </div>
    
        </div> 
    </section>

        <div class="col-md-5 col-lg-4">
            <a href="producto1.php"><img src="img/iphone-8-03.png" alt="logotipo" class="img-fluid" width="300px"></a> 
            <a href="producto1.php"><h2>Iphone 8</h2></a>
            <p>ARS $65.000</p>
            <br>
            <a href="producto4.php"><img src="img/samsung-s8-01.jpg" alt="logotipo" class="img-fluid" width="300px"></a>
            <a href="producto4.php"><h2>Samsung S8</h2></a>
            <p>ARS $27.000</p>
            <br>
            <a href="producto7.php"><img src="img/moto-g5.webp" alt="logotipo" class="img-fluid" width="300px"></a>
            <a href="producto7.php"><h2>Motorola G5</h2></a>
            <p>ARS $8.500</p>
            <br>
        </div>
        {{-- <div class="col-md-5 col-lg-4">
            <a href="producto2.php"><img src="img/apple-iphone-x--1.jpg" alt="logotipo" class="img-fluid" width="300px"></a>
            <br>
            <a href="producto2.php"><h2>Iphone X 256 gb</h2></a>
            <p>ARS $85.000 </p> 
            <br>
            <a href="producto5.php"><img src="img/samsung-galaxy-s9-001.jpg" alt="logotipo" class="img-fluid" width="300px"></a>
            <a href="producto5.php"><h2>Samsung S9</h2></a>
            <p>ARS $29.000</p>
            <br>
            <a href="producto8.php"><img src="img/moto-g6.jpeg" alt="logotipo" class="img-fluid" width="300px"></a>
            <a href="producto8.php"><h2>Motorola G6</h2></a>
            <p>ARS $16.000</p>
            <br>
        </div> --}}

        
        <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Nuestros productos</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="card" style="width: 18rem;">
  <img src="img/iphone-8-03.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iphone 8</h5>
    <p class="card-text">Smartphone Apple IPHONE 7 Plus Rosas Oro Ios 32GB Ios 5,5 "Touch ID"</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">$25000</li>
   
  </ul>
  <div class="card-body">
    
    <a href="#" class="card-link">COMPRAR</a>
  </div>
</div>
</div>
                </div>          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="card" style="width: 18rem;">
  <img src="img/iphone-8-03.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Iphone 8</h5>
    <p class="card-text">Smartphone Apple IPHONE 7 Plus Rosas Oro Ios 32GB Ios 5,5 "Touch ID"</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">$25000</li>
   
  </ul>
  <div class="card-body">
    
    <a href="#" class="card-link">COMPRAR</a>
  </div>
</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    </div>

    </div> 
</section>
    
   
        </body>
        </html>
        @include('footer')
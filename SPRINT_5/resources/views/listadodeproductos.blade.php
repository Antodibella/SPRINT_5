@include('header')
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<script src="https://kit.fontawesome.com/b8bd14391e.js" crossorigin="anonymous"></script>
<title>Tecno Movil</title>
</head>
<body>


    <!--  SECCION  -->
<section>
        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
                <div class="col-md-4 col-lg-3">
                    <a href="producto?id=<?=$producto['id']?>"><img src="{{-- mostrar imagen db --}}" alt="logotipo" class="img-fluid" width="300px"></a> 
                    
                    <a href="producto?id=<?=$producto['id']?>"><h2><?=$producto['marca']?></h2></a>
                    <a href="producto?id=<?=$producto['id']?>"><h2><?=$producto['modelo']?></h2></a>
                    <a href="producto?id=<?=$producto['id']?>"><h2><?=$producto['precio']?></h2></a>
                    <p>ARS <? = $productos['precio']?></p>
                
                </div>
            <?php endforeach; ?>
           
            
        </div>
    
        </div> 
    </section>>

</body>
</html>
 @include('footer')
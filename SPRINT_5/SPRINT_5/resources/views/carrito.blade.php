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
    <title>Mi carrito</title>
    <body>
   
<section class="carritocompra">

<div class="jumbotron">
<ul class="carrito" >
               
  <hr>
  <div>
		<?php echo $sHTML; ?>
	</div>
	<ul>
		<li><a href="carrito.php?nombre=iphone-8&precio=65000"img="img/iphone-8-03.png">Iphone 8</a></li>
		<li><a href="carrito.php?nombre=Iphone-X&precio=85000">Iphone X 256 Gb</a></li>
		<li><a href="carrito.php?nombre=Iphone-11&precio=125000">Iphone 11 PRO</a></li>
		<li><a href="carrito.php?nombre=SamsumgS8&precio=47000">Samsung S8</a></li>
		<li><a href="carrito.php?nombre=SamsumgS9&precio=29000">Samsung S9</a></li>
		<li><a href="carrito.php?nombre=SamsumgS10Plus&precio=125000">Samsung S10 Plus</a></li>
		<li><a href="carrito.php?nombre=moto-G5&precio=8500">Motorola G5</a></li>
		<li><a href="carrito.php?nombre=moto-G6&precio=16000">Motorola G6</a></li>
        <li><a href="carrito.php?nombre=moto-G7&precio=18000">Motorola G7</a></li>
		<li><a href="carrito.php?vaciar=1">Vaciar Carrito</a></li>
	</ul>	  

  
</div>

</section>
<br><br><br>
   
</body>
</html>
@include('footer')
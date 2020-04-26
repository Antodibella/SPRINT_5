@extends('layouts.plantilla')
@section('header_title')
    Productos - TecnoMovil
@endsection
@section('content')
    


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
    </section>

@endsection
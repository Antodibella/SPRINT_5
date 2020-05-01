@extends('layouts.plantilla')
@section('header_title')
    Productos - TecnoMovil
@endsection
@section('content')
    


    <!--  SECCION  -->
<section class="productos">
        <br><br>
        <div  class="row">
            <?php foreach($productos as $producto) : ?>
            
                <div class="col-md-4 col-lg-4">
                <a href="producto/<?=$producto['id']?>"><img src="/storage/{{$producto->foto}}" alt="logotipo" class="img-fluid" width="300px"></a> 
                    
                    <a href="producto/<?=$producto['id']?>"><h2><?=$producto['marca']?></h2></a>
                    <a href="producto/<?=$producto['id']?>"><h2><?=$producto['modelo']?></h2></a>
                    <h2>ARS <?=$producto['precio']?></h2>
                    
                
                </div>
            <?php endforeach; ?>
           
            
            
        </div>
        <div class="center">
    {{$productos->links()}}
</div>
    </section>

@endsection
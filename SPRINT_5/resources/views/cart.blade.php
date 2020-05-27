@extends('layouts.plantilla')
@section('header_title')
    Tus Compras - TecnoMovil
@endsection
@section('content')
   
<section class="carritocompra">
    <br><br>

    <div class="log">
        <h1>Tus compras</h1>  
   </div>   
  <hr>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                </div>
            @endif
            <?php $total=0;?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col" style="text-align: center">Cantidad</th>
                                        <th scope="col" style="text-align: center">Precio</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productosCart as $productoCart)
                                        @if((Auth::user())&&(Auth::user()->id===($productoCart->user_id)))
                                            <tr>
                                                <td><a href="{{route('productos.show', $productoCart->producto_id)}}">{{ $productoCart->nombre }}</a></td>
                                                <td style="text-align: center">{{ $productoCart->cantidad }}</td>
                                                <td style="text-align: center">${{ $productoCart->precio }}</td>
                                                <td style="text-align: right">
                                                    <form action="{{ route('cart.destroy', $productoCart->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i></a>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php $total += ($productoCart->cantidad*$productoCart->precio);?>
                                        @endif
                                    @endforeach
                                </tbody>
                                <tr>
                                    <td colspan="4" style="text-align: right; padding-bottom:0"><b>Total: ARS <?php echo $total;?></b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="boton-todopago-css">
                            <a href='https://forms.todopago.com.ar:443/formulario/commands?command=formulario&fr=1&m=4e29b7a8e0eb5fdb4cd94ed3600c8bed#utm_source=3372773&utm_medium=boton_de_pago&utm_campaign=web'>
                              <div class="col-md-4 col-sm-4 col-xs-12 tipo-boton-class boton_solo" id="htmlBoton" style="display: block;">
                                <input type="button" id="vistaPreviaBoton" class="btn aviso-boton-texto disabled" value="Pagar" style="border: 1px solid rgb(76, 135, 29); width: 100px; height: 45px; background-color: rgb(152, 191, 160); font-family: &quot;Trebuchet MS&quot;, Helvetica, sans-serif; color: rgb(10, 10, 10);">
                              </div>
                            </a>
                          </div>
                        </div>
                </div> 
            </div>
        </div>
    </div>
</div>


</section>

   
        
@endsection

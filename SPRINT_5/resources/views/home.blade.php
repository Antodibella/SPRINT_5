{{-- @extends('layouts.app') --}}

@extends('layouts.plantilla')
@section('header_title')
   Home - TecnoMovil
@endsection

    

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Iniciaste sesión.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido <strong>{{ Auth::user()->name }} </strong>  a TecnoMovil!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

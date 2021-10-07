@extends('layouts.main')
@section('title', 'IMOB - Criar')
    


@section('content')
@include('casas._inc.header')
<!-- FORMULARIO DE CADASTRO -->
<div class="container">
    
    <div class="titulo">
        <h2> Registro: </h2>
    </div>

    <h2>{{$casa->nome}}</h2>
    <p>{{$casa->descricao}} nulo</p>

    <img class="img-fluid" src="{{ URL::asset('img/casa')}}/{{$casa->imagem }}">

    
        
        <div class="photo-gallery">
              <div class="container">
                  <div class="intro">
                      <h2 class="text-center">Galeria de imagens</h2>
                      
                  </div>
                  <div class="row photos">
                      <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ URL::asset('img/logo1.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ URL::asset('img/logo1.png') }}"></a></div>
      
                      <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ URL::asset('img/logo2.png') }}" data-lightbox="photos"><img class="img-fluid" src="{{ URL::asset('img/logo2.png') }}"></a></div>
      
                      <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="img/logo3.png" data-lightbox="photos"><img class="img-fluid" src="img/logo3.png"></a></div>
                  </div>
              </div>
          </div>
          
      
      
      
      
</div>
    
@endsection


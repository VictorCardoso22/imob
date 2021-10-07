
@extends('layouts.main')
@section('title', 'IMOB - Criar')
    

@section('content')
@include('casas._inc.header')
<!-- FORMULARIO DE CADASTRO -->
<div class="container">
    <div class="titulo">
        <h2> Cadastro: </h2>
    </div>
      
          <form class="row" action="/casas" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label class="form-label">Nome:</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col-12">
            <hr>
              <label class="form-label">Imagem de capa:</label>
              <input type="file" class="form-control" id="imagem" name="imagem" >
            </div>
            <div class="col-12">
            <hr>
              <label class="form-label">Descrição:</label>
              <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>
            
            <div class="col-mb-3">
            <hr>
              <label class="form-label"><h4>Endereço</h4></label>
              <div class="row">
                  <div class="col-sm-3">
                      <label class="form-label">Cidade:</label>
                      <input type="text" class="form-control" name="endereco[Cidade]">
                  </div>
                  <div class="col-sm-3">
                      <label class="form-label">Bairro:</label>
                      <input type="text" class="form-control" name="endereco[Bairro]">
                  </div>
                  <div class="col-sm-3">
                      <label class="form-label">Rua:</label>
                      <input type="text" class="form-control" name="endereco[Rua]">
                  </div>
                  <div class="col-sm-1">
                      <label class="form-label">Número:</label>
                      <input type="text" class="form-control" name="endereco[Numero]" >
                  </div>
                  <div class="col-sm-2">
                      <label class="form-label">Referencia:</label>
                      <input type="text" class="form-control" name="endereco[Referencia]" >
                  </div>
                  
              </div>
              <hr>
            </div>
            <div class="col-sm">
              
              <label class="form-label">ID Energia:</label>
              <input type="text" class="form-control" id="id_energia" name="id_energia">
            </div>
            <div class="col-sm">
              <label class="form-label">ID Água:</label>
              <input type="text" class="form-control"  id="id_agua" name="id_agua">
            </div>
            <!-- Caracteristicas -->
            <div class="mb-3">
            <hr>
              <label class="form-label"><h4>Caracteristicas</h4></label>
              <div class="row">
                  <div class="col-sm-2">
                    <label class="form-label">Quarto(s):</label>
                    <input type="number" class="form-control" name="caracteristicas[Quarto]">
                  </div>
                  <div class="col-sm-2">
                    <label class="form-label">Sala:</label>
                    <input type="number" class="form-control"  name="caracteristicas[Sala]">
                  </div>
                  <div class="col-sm-2">
                    <label class="form-label">Cozinha:</label>
                    <input type="number" class="form-control"  name="caracteristicas[Cozinha]">
                  </div>
                  <div class="col-sm-2">
                    <label class="form-label">Banheiro(s):</label>
                    <input type="number" class="form-control"  name="caracteristicas[Banheiro]">
                  </div>
                  <div class="col-sm-2">
                    <label class="form-label">Garagem:</label>
                    <input type="number" class="form-control"  name="caracteristicas[Garagem]" >
                  </div>
                  <div class="col-sm-2">
                    <label class="form-label">Quintal:</label>
                    <input type="number" class="form-control"  name="caracteristicas[Quintal]">
                  </div>
              </div>
            </div>
            <!-- Status -->
            <div class="mb-3">
            <hr>
              <label class="form-label"><h4>Status</h4></label>
             
              
                <select name="status" class="form-select" aria-label="Default select example">
                  <option value="Alugada">Alugada</option>
                  <option value="Livre">Livre</option>
                  
              </select>
              
              
            </div>

           <!-- Gsleria de imagens -->
            {{-- <div class="col-12">
              <hr>
                <label class="form-label">Galeria de imagens:</label>
                <input type="file" class="form-control" name="galeria[]" multiple>
                <hr>
              </div> --}}
            
            
           
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      
    </div>

@endsection
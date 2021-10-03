<?php include("header.php"); ?>
<!-- FORMULARIO DE CADASTRO -->
<div class="container">
<div class="titulo">
    <h2> Cadastro: </h2>
</div>
  
      <form class="row">
        <div class="col-12">
          <label class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" >
        </div>
        <div class="col-12">
        <hr>
          <label class="form-label">Imagem de capa:</label>
          <input type="file" class="form-control" id="imagem" >
        </div>
        <div class="col-12">
        <hr>
          <label class="form-label">Descrição:</label>
          <textarea class="form-control" id="descricao" ></textarea>
        </div>
        
        <div class="col-mb-3">
        <hr>
          <label class="form-label"><h4>Endereço</h4></label>
          <div class="row">
              <div class="col-sm-3">
                  <label class="form-label">Cidade:</label>
                  <input type="text" class="form-control" id="" >
              </div>
              <div class="col-sm-3">
                  <label class="form-label">Bairro:</label>
                  <input type="text" class="form-control" id="" >
              </div>
              <div class="col-sm-3">
                  <label class="form-label">Rua:</label>
                  <input type="text" class="form-control" id="" >
              </div>
              <div class="col-sm-1">
                  <label class="form-label">Número:</label>
                  <input type="text" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                  <label class="form-label">Referencia:</label>
                  <input type="text" class="form-control" id="" >
              </div>
              
          </div>
          <hr>
        </div>
        <div class="col-sm">
          
          <label class="form-label">ID Energia:</label>
          <input type="text" class="form-control" id="descricao" >
        </div>
        <div class="col-sm">
          <label class="form-label">ID Água:</label>
          <input type="text" class="form-control" id="descricao" >
        </div>
        <!-- Caracteristicas -->
        <div class="mb-3">
        <hr>
          <label class="form-label"><h4>Caracteristicas</h4></label>
          <div class="row">
              <div class="col-sm-2">
                <label class="form-label">Quarto(s):</label>
                <input type="number" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                <label class="form-label">Sala:</label>
                <input type="number" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                <label class="form-label">Cozinha:</label>
                <input type="number" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                <label class="form-label">Banheiro(s):</label>
                <input type="number" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                <label class="form-label">Garagem:</label>
                <input type="number" class="form-control" id="" >
              </div>
              <div class="col-sm-2">
                <label class="form-label">Quintal:</label>
                <input type="number" class="form-control" id="" >
              </div>
          </div>
        </div>
        <!-- Status -->
        <div class="mb-3">
        <hr>
          <label class="form-label"><h4>Status</h4></label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Alugada
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Livre
            </label>
          </div>
        </div>
        
        
       
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  
</div>
  

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Instrumento Solidario</title>
  <link rel="icon"  href="img/logo.png"/>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  <script type="text/javascript" defer src="libs/jquery/jquery-3.3.1.min.js"> </script>

  <script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" defer src="js/main.js"> </script>
</head>
 
<body background="img/notas3.jpg">

  <nav  id="mainNav" class="navbar navbar-expand-lg fixed-top bg-secundario">
     <div class="container">
      <button id="botao-nav" class="navbar-toggler navbar-toggler-right-text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="pagina_inicial.html"> <img src="img/logo4.png" height="70px"> </a>
      <div class="collapse navbar-collapse" id="navbarResponsive">    
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">CADASTRO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTATOS</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>

<div  align="center">
<div class="formulario">
 
<form  class="form" method="POST" id="signup-form" class="signup-form" action="insere.php">
  <br>
   <h3> Cadastre-se</h3>
  <div class="form-row" align="left">
    <div class="form-group col-md-6">
      <label for="inputEmail4">  Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="Email"  placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" name="Senha" placeholder="senha">
    </div>
  </div>

    <div class="form-row" align="left">
    <div class="form-group col-md-5">
      <label for="inputCity">Nome</label>
      <input type="text" class="form-control" id="inputCity" name="Nome"  placeholder="nome">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Sobrenome</label>
      <input type="text" class="form-control" id="inputZip" name="Sobrenome" placeholder="sobrenome">
    </div>
    <div class="form-group col-md-3">
      <label for="inputZip">Telefone</label>
      <input type="text" class="form-control" id="inputZip" name="Telefone" i placeholder="telefone">
    </div>
  </div>

  <div class="form-row" align="left">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity" name="Cidade"  placeholder="cidade">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Estado</label>
      <select id="inputState" class="form-control" name="Estado" >
        <option selected>Escolha...</option>
        <option>Acre </option>
        <option>Alagoas</option>
        <option>Amapá</option>
        <option>Amazonas</option>
        <option>Bahia</option>
        <option> Ceará</option>
        <option> Distrito Federal </option>
        <option>Espírito Santo</option>
        <option>Goiás </option>
        <option>Maranhão </option>
        <option>Mato Grosso</option>
        <option>Mato Grosso do Sul</option>
        <option>Minas Gerais </option>
        <option>Paraíba </option>
        <option>Paraná </option>
        <option>Pernambuco </option>
        <option>Piauí </option>
        <option>Rio de Janeiro </option>
        <option>Rio Grande do Norte </option>
        <option>Rio Grande do Sul</option>
        <option>Rondônia </option>
        <option>Roraima </option>
        <option>Santa Catarina</option>
        <option>São Paulo </option>
        <option>Sergipe</option>
        <option>Tocantins </option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Cep</label>
      <input type="text" class="form-control" id="inputZip" name="Cep"  placeholder="cep">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Concordo com os termor e condições.
      </label>
    </div>
  </div>
  <button type="submit" name="submit" id="submit" value="Cadastrar" class="btn btn-primary"> Cadastrar</button>
  <br> <br>
</form>

</div>
</div>
<br><br><br><br>
<div id="rodape" class="container-fluid mt-5">
    <div class="row align-items-center d-flex justify-content-center">
      <div class="col-lg-4" align="center"> <h2> Faça parte</h2> 
        <a href=""> Cadastre-se</a>
        <a href="imprimir.html"> Veja quem faz parte</a>
        <a href=""> Descubra a música </a>
        <a href=""> Sobre nós</a>
      </div>
      <div class="col-lg-4" align="center">  <h2> Empresa</h2> 
        <a href=""> Sobre a Instrumento Solidario</a> 
        <a href=""> Parceiros</a>
        <a href=""> Desenvolvedores</a>
        <a href=""> Trabalhe Conosco</a>
      </div>
      <div class="col-lg-4" align="center">  <h2> Suporte</h2> 
        <a href=""> Atendimento</a>
        <a href=""> Central de ajuda</a>
         <a href=""> Fale conosco</a>
         <a href=""> Patrocinadores</a>
      

      </div>
  </div>

 <div id="rodape" class="container-fluid ">
    <div class="row align-items-center d-flex justify-content-center">
        <img src="img/facebook.png" height="50px"> 
        <img src="img/Twitter.png" height="50px"> 
        <img src="img/youtube.png" height="50px"> 
        <img src="img/intagram.png" height="60px"> 
      </div>
      
   <hr color="#000000"/>
   <h5 align="center">&copy;Copyright Carlos&Lânia</h5>
</div>


</body>
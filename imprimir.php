<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>

      <link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
    
      <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    
      <script type="text/javascript" defer src="libs/jquery/jquery-3.3.1.min.js"> </script>
    
      <script type="text/javascript" defer src="libs/bootstrap/js/bootstrap.min.js"></script>
    
      <script type="text/javascript" defer src="js/main.js"> </script>

</head>

<body color="#FFC1C1">
    
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
  
  <br> <br> <br> <br>   <br> 
   <!----------------------------------------------------MENU-------------------------------------------------------->
  <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="#">Sistema de Cadastro - Teste</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../cadastro.php">Cadastro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
   <!-------------------------------------------------PHP - CONSULTA---------------------------------------------->

    <?php 
        include 'conexao_pdo.php';

        //  nova variavel onde guarda o objeto criado na funcao getConnection()
        $conn = getConnection();

      // Consulta SQL que irá retornar valores do DB
        $sql_show = "SELECT * FROM cadastro";
        $stmt = $conn->prepare($sql_show);
        $stmt->execute();

        #Aqui criamos uma variavel chamada "funcionarios" onde ele recebe o resultado do objeto "stmt". com a função fatchALL, retornamos a lista de nomes, um array, mas como objetos, onde chamaremos mais abaixo no foreach
        $cadastros = $stmt->fetchAll(PDO::FETCH_OBJ);

    ?>
<!-------------------------------------------------TABELA ------------------------------------------------>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Gerenciar</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>CEP</th>
                </tr>
                <?php foreach($cadastros as $func): ?>
                    <tr>
                        <td><?= $func->id; ?></td>
                        <td><?= $func->email; ?></td>
                        <td><?= $func->senha; ?></td>
                        <td><?= $func->nome; ?></td>
                        <td><?= $func->sobrenome; ?></td>
                        <td><?= $func->telefone; ?></td>
                        <td><?= $func->cidade; ?></td>
                        <td><?= $func->estado; ?></td> 
                        <td><?= $func->cep; ?></td>                      
                        <td>
                            <a href="cadastro_update.php?id=<?= $func->id ?>"  class="btn btn-info">Editar</a>
                            <a onclick="return confirm('Tem certeza que deseja excluir usuario?')" href="delete.php?id=<?= $func->id ?>" class="btn btn-danger">Excluir</a>
                        </td>

                    </tr>
                <?php endforeach; ?>
                
            </table>
            
        </div>
        
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
</html>
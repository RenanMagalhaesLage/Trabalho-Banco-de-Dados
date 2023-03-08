<?php
    session_start();
    include('config.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email'])) == true and (!isset($_SESSION['senha'])) == true)
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: admin.php');
    }
    $logado = $_SESSION['email'];
    $sql = "SELECT * FROM aluno ORDER BY id DESC";
    $result = $conexao->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>UNIZON | ADM</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
    body{
        text-align: center;
        background-color: #fffaea;
    }
    .navbar {
        border-radius: 0%;
        background-color: #29180c;
        border-color: #44240e;
    }
    .ativo{
        background-color: #44240e;
    }
    .direita{
        margin-top: 7px;
        margin-right: 70px;
    }
    .tabela{
        margin: 50px;
        background: rgba(0,0,0,0.3);
        border-radius: 15px 15px 0px 0px;
    }
    .tabela th{
        text-align: center;
    }
    .btn-primary{
        margin-right: 5px;
        background-color: #f8bd62;
        border: #f8bd62;
    }
    .btn-primary:hover{
        background-color: #ed8631;
        border: #ed8631;
    }
    .logo{
        width: 30px;
        margin-top: 6px;
        margin-right: 20px;
    }
    .form-control{
        width: 26%;
    }
    .box-search{
        display: flex;
        justify-content: center;
        gap: .1%;
    }

</style>
<body>
<nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <!--LOGO-->
            <div class="navbar-header">
               <!--Botão de barra de navegação-->
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <img class="logo" src="icone.png">
               <a href="#" class="navbar-brand" href="#">Universidade Horizonte | UNIZON </a>
            </div>
            <!--Menu de Itens-->
            <div class="collapse navbar-collapse" id="mainNavBar">
               <ul class="nav navbar-nav">
                  <!--esse active significa que marca em qual página estamos-->
                  <li class="ativo"><a href="#">Home</a></li>
                  <li><a href="inserirAluno.php">Inserir Aluno</a></li>
                  <li><a href="listarAlunos.php">Listar Alunos</a></li>
                  <li><a href="inserirProf.php">Inserir Professor</a></li>
                  <li><a href="listarProf.php">Listar Professor</a></li>
               </ul>

               <!--Alinhamento à direita-->
               <ul class="navbar-right d-flex">
                  <li><a href="sair.php" class="direita btn btn-danger ">Sair</a></li>
               </ul>
            </div>

         </div>         
      </nav>
      <br>
      <?php
        echo "<h1>Bem vindo <u>$logado</u></h1>";
      ?>
      
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event){
        if(event.key === "Enter"){
            searchData();
        }
    });                    

    function searchData()
    {
        window.location = 'registro.php?search='+search.value;
    }

</script>
</html>
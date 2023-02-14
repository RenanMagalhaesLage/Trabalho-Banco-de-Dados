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
    if(!empty($_GET['search']))
    {
        //echo "contem algo";
        $data = $_GET['search'];
        $sql = "SELECT * FROM aluno WHERE id LIKE '%$data%' or RA LIKE '%$data%' or pNome LIKE '%$data%' or mNome LIKE '%$data%' or uNome LIKE '%$data%' or email LIKE '%$data%' or telefone LIKE '%$data%' or sexo LIKE '%$data%' or dataNasc LIKE '%$data%' or endereco LIKE '%$data%' or codCurso LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM aluno ORDER BY id DESC";
    }
    //$sql = "SELECT * FROM aluno ORDER BY RA DESC";

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
                  <li><a href="homeADM.php">Home</a></li>
                  <li><a href="inserirAluno.php">Inserir Aluno</a></li>
                  <li class="ativo"><a href="listarAlunos.php">Listar Alunos</a></li>
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
      <!--PESQUISAR-->
    <div class="box-search">
            <input type="earch" class="form-control" placeholder="Pesquisar" id="pesquisar">
            <button onclick="searchData()" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </div>
            <!--TABELA DE REGISTROS-->
        <div class="tabela">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">RA</th>
                            <th scope="col">pNome</th>
                            <th scope="col">mNome</th>
                            <th scope="col">uNome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">codCurso</th>
                            <th scope="col">...</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['id']."</td>";
                                echo "<td>".$user_data['RA']."</td>";
                                echo "<td>".$user_data['pNome']."</td>";
                                echo "<td>".$user_data['mNome']."</td>";
                                echo "<td>".$user_data['uNome']."</td>";
                                echo "<td>".$user_data['email']."</td>";
                                echo "<td>".$user_data['senha']."</td>";
                                echo "<td>".$user_data['telefone']."</td>";
                                echo "<td>".$user_data['sexo']."</td>";
                                echo "<td>".$user_data['dataNasc']."</td>";
                                echo "<td>".$user_data['endereco']."</td>";
                                echo "<td>".$user_data['codCurso']."</td>";
                                echo "<td>
                                    <a class='btn btn-primary' href='editAluno.php?id=$user_data[id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                    </svg>
                                    <a class='btn btn-danger' href='deleteAluno.php?id=$user_data[id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                    </svg>

                                </td>";
                                echo "<tr>";
                            }
                        ?>
                    </tbody>
            </table>
        </div>
      
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
        window.location = 'listarAlunos.php?search='+search.value;
    }

</script>
</html>
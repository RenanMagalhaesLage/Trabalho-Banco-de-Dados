<?php
if(isset($_POST['submit']))
{

  include_once('config.php');

  $pNome = $_POST['pNome'];
  $mNome = $_POST['mNome'];
  $uNome = $_POST['uNome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['sexo'];
  $dataNasc = $_POST['dataNasc'];
  $titulo = $_POST['titulo'];
  $dataContratacao = $_POST['dataContratacao'];
  $salario = $_POST['salario'];
  $codDep = $_POST['codDep'];

  $result = mysqli_query($conexao, "INSERT INTO professor(pNome,mNome,uNome,email,senha,telefone,sexo,dataNasc,titulo, dataContratacao, salario, codDep) VALUES ('$pNome','$mNome','$uNome','$email','$senha','$telefone','$sexo','$dataNasc','$titulo','$dataContratacao', '$salario', '$codDep')");

  header('Location: homeADM.php');

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulário</title>
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .formulario{
    background: linear-gradient(to right, #eb7d55, #ffd148 );
    }
    .tela-formulario{
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 15px;
        width: 20%;
    }
    .tela-formulario fieldset{
        border: 3px solid #44240e;
    }
    .tela-formulario legend{
        border: 1px solid #44240e;
        padding: 10px;
        text-align: center;
        background-color: #44240e;
        border-radius: 8px;
    }
    .inputBox{
        position: relative;

    }
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }
    .inputUser:focus ~ .labelInput, .inputUser:valid ~ .labelInput{
        top: -20px;
        font-size: 12px;
        color: #ed8631;
    }

    #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }
    #submit{
        background: #44240e;
        width: 100%;
        border: none;
        color: white;
        padding: 15px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 10px;
    }
    #submit:hover{
        background-image: linear-gradient(to left,#44240e, #e05522);
    }
    .voltar{
        text-decoration: none;
        color:white;
    }
    .voltar:hover{
        color: #44240e;
    }
</style>
<body class="formulario">
  <a class="voltar" href="homeADM.php">Voltar</a>
  <div class="tela-formulario">
    <form action="inserirProf.php" method="post">
      <fieldset>
        <legend><b>Formulário de Professor</b></legend>
        <br>
        <!--NOME-->
        <div class="inputBox">
          <input type="text" name="pNome" id="pNome" class="inputUser" required>
          <label class="labelInput" for="pNome">Nome</label>
        </div>
        <br><br>
        <!--SOBRENOME-->
        <div class="inputBox">
          <input type="text" name="mNome" id="mNome" class="inputUser" required>
          <label class="labelInput" for="mNome">Sobrenome</label>
        </div>
        <br><br>
        <!--SOBRENOME-->
        <div class="inputBox">
          <input type="text" name="uNome" id="uNome" class="inputUser" required>
          <label class="labelInput" for="uNome">Último Sobrenome</label>
        </div>
        <br><br>
        <!--EMAIL-->
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" required>
          <label class="labelInput" for="email">E-mail</label>
        </div>
        <br><br>
        <!--SENHA-->
        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" required>
          <label class="labelInput" for="senha">Senha</label>
        </div>
        <br><br>        
        <!--TELEFONE-->
        <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputUser" required>
            <label class="labelInput" for="telefone">Telefone</label>
        </div>

        <!--SEXO-->
        <!--Teste-->
        <p>Sexo:</p>
        <input type="radio" name="sexo" id="feminino" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" name="sexo" id="masculino" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" name="sexo" id="outro" value="outro" required>
        <label for="outro">Outro</label>
        <br><br>
        <!--DATA DE NASCIMENTO-->
        <label for="dataNasc"><b>Data de Nascimento:</b></label>
        <input type="date" name="dataNasc" id="dataNasc"  required>
        <br><br><br>
        <!--Titulo-->
        <div class="inputBox">
            <input type="text" name="titulo" id="titulo" class="inputUser" required>
            <label class="labelInput" for="titulo">Título</label>
        </div>
        <br><br>
        <!--DATA DE CONTRATAÇÃO-->
        <label for="dataContratacao"><b>Data de Contratação:</b></label>
        <input type="date" name="dataContratacao" id="dataContratacao"  required>
        <br><br><br>
        <!--Salario-->
        <div class="inputBox">
            <input type="text" name="salario" id="salario" class="inputUser" required>
            <label class="labelInput" for="salario">Salário</label>
        </div>
        <br><br>
        <!--DEPARTAMENTO-->
        <div class="inputBox">
            <input type="text" name="codDep" id="codDep" class="inputUser" required>
            <label class="labelInput" for="codDep">Código do Departamento</label>
        </div>
        <br><br>
        
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form> 
  </div>
</body>
</html>
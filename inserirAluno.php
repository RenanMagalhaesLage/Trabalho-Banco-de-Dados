<?php
if(isset($_POST['submit']))
{

  include_once('config.php');

  $RA = $_POST['RA'];
  $pNome = $_POST['pNome'];
  $mNome = $_POST['mNome'];
  $uNome = $_POST['uNome'];
  $dataNasc = $_POST['dataNasc'];
  $sexo = $_POST['sexo'];
  $endereco = $_POST['endereco'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $codCurso = $_POST['codCurso'];

  $result = mysqli_query($conexao, "INSERT INTO aluno(RA,pNome,mNome,uNome,dataNasc,sexo,endereco,email,senha,telefone,codCurso) VALUES ('$RA','$pNome','$mNome','$uNome','$dataNasc','$sexo','$endereco','$email','$senha','$telefone','$codCurso')");

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
    <form action="inserirAluno.php" method="post">
      <fieldset>
        <legend><b>Formulário de Aluno</b></legend>
        <br>
        <!--RA-->
        <div class="inputBox">
          <input type="text" name="RA" id="RA" class="inputUser" required>
          <label class="labelInput" for="RA">RA</label>
        </div>
        <br><br>
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
        <!--Endereço-->
        <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser" required>
            <label class="labelInput" for="endereco">Endereço</label>
        </div>
        <br><br>
        <!--Curso-->
        <div class="inputBox">
            <input type="text" name="codCurso" id="codCurso" class="inputUser" required>
            <label class="labelInput" for="codCurso">Código do Curso</label>
        </div>
        <br><br>
        
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form> 
  </div>
</body>

</html>
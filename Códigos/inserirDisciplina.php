<?php
if(isset($_POST['submit']))
{

  include_once('config.php');

  $codigo = $_POST['codigo'];
  $nomeDis = $_POST['nomeDis'];
  $cargaH = $_POST['cargaH'];
  $semestre = $_POST['semestre'];
  $periodo = $_POST['periodo'];
  $codCurso = $_POST['codCurso'];

  
  $result = mysqli_query($conexao, "INSERT INTO disciplina(codigo,nomeDis,cargaH,semestre,periodo,codCurso) VALUES ('$codigo','$nomeDis','$cargaH','$semestre','$periodo','$codCurso')");

  header('Location: login.php');
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
    <form action="formulario.php" method="post">
      <fieldset>
        <legend><b>Formulário de Disciplina</b></legend>
        <br>
        <!--Código-->
        <div class="inputBox">
          <input type="text" name="codigo" id="codigo" class="inputUser" required>
          <label class="labelInput" for="codigo">Código</label>
        </div>
        <br><br>
        <!--NOME-->
        <div class="inputBox">
          <input type="text" name="nomeDis" id="nomeDis" class="inputUser" required>
          <label class="labelInput" for="nomeDis">Nome</label>
        </div>
        <br><br>
        <!--Carga Horária-->
        <div class="inputBox">
          <input type="text" name="cargaH" id="cargaH" class="inputUser" required>
          <label class="labelInput" for="cargaH">Carga Horária</label>
        </div>
        <br><br>
        <!--Semestre-->
        <div class="inputBox">
          <input type="text" name="semestre" id="semestre" class="inputUser" required>
          <label class="labelInput" for="semestre">Semestre</label>
        </div>
        <br><br>
        <!--Período-->
        <div class="inputBox">
          <input type="text" name="periodo" id="periodo" class="inputUser" required>
          <label class="labelInput" for="periodo">Período</label>
        </div>
        <br><br>
        <!--Código Curso-->
        <div class="inputBox">
          <input type="text" name="codCurso" id="codCurso" class="inputUser" required>
          <label class="labelInput" for="codCurso">Código do curso</label>
        </div>
        <br><br>
        
        
        <input type="submit" name="submit" id="submit">
      </fieldset>
    </form> 
  </div>
</body>
</html>
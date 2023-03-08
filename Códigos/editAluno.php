<?php
  if(!empty($_GET['id']))
  {

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM aluno WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result)){
        $RA = $user_data['RA'];
        $pNome = $user_data['pNome'];
        $mNome = $user_data['mNome'];
        $uNome = $user_data['uNome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $dataNasc = $user_data['dataNasc'];
        $endereco = $user_data['endereco'];
        $codCurso = $user_data['codCurso'];
      }
    }
    else{
      header('Location: listarAlunos.php');
    }
  }
  else{
    header('Location: listarAlunos.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Editar Alunos</title>
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
  #update{
    background: #44240e;
    width: 100%;
    border: none;
    color: white;
    padding: 15px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 10px;
  }
  #update:hover{
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
  <a class="voltar"href="listarAlunos.php">Voltar</a>
  <div class="tela-formulario">
    <form action="saveEditAluno.php" method="POST">
      <fieldset>
        <legend><b>Formulário de Aluno</b></legend>
        <br>
        <!--RA-->
        <div class="inputBox">
          <input type="text" name="RA" id="RA" class="inputUser" value="<?php echo $RA ?>" required>
          <label class="labelInput" for="RA">RA</label>
        </div>
        <br><br>
        <!--NOME-->
        <div class="inputBox">
          <input type="text" name="pNome" id="pNome" class="inputUser" value="<?php echo $pNome ?>" required>
          <label class="labelInput" for="pNome">Nome</label>
        </div>
        <br><br>
        <!--SOBRENOME-->
        <div class="inputBox">
          <input type="text" name="mNome" id="mNome" class="inputUser" value="<?php echo $mNome ?>" required>
          <label class="labelInput" for="mNome">Sobrenome</label>
        </div>
        <br><br>
        <!--SOBRENOME-->
        <div class="inputBox">
          <input type="text" name="uNome" id="uNome" class="inputUser" value="<?php echo $uNome ?>" required>
          <label class="labelInput" for="uNome">Último Sobrenome</label>
        </div>
        <br><br>
        <!--EMAIL-->
        <div class="inputBox">
          <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>"required>
          <label class="labelInput" for="email">E-mail</label>
        </div>
        <br><br>
        <!--SENHA-->
        <div class="inputBox">
          <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
          <label class="labelInput" for="senha">Senha</label>
        </div>
        <br><br>        
        <!--TELEFONE-->
        <div class="inputBox">
            <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
            <label class="labelInput" for="telefone">Telefone</label>
        </div>

        <!--SEXO-->
        <!--Teste-->
        <p>Sexo:</p>
        <input type="radio" name="sexo" id="feminino" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked': '' ?> required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" name="sexo" id="masculino" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked': '' ?> required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" name="sexo" id="outro" value="outro" <?php echo ($sexo == 'outro') ? 'checked': '' ?> required>
        <label for="outro">Outro</label>
        <br><br>
        <!--DATA DE NASCIMENTO-->
        <label for="dataNasc"><b>Data de Nascimento:</b></label>
        <input type="date" name="dataNasc" id="dataNasc"  value="<?php echo $dataNasc ?>" required>
        <br><br><br>
        <!--Endereço-->
        <div class="inputBox">
            <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
            <label class="labelInput" for="endereco">Endereço</label>
        </div>
        <br><br>
        <!--Curso-->
        <div class="inputBox">
            <input type="text" name="codCurso" id="codCurso" class="inputUser" value="<?php echo $codCurso ?>" required>
            <label class="labelInput" for="codCurso">Código do Curso</label>
        </div>
        <br><br>
        <input type="hidden" name="id" value=" <?php echo $id ?> ">
        <input type="submit" name="update" id="update">
      </fieldset>
    </form> 
  </div>

 
</body>

</html>
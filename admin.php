<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ALUNO | Login </title>
  <link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
  }
  .login{
    background: linear-gradient(to right, #eb7d55, #ffd148 );
    color: white;
  }

  .tela-login{
      background-color: rgba(0,0, 0, 0.8);
      position: absolute;
      top: 50%;
      left:50%;
      transform: translate(-50%,-50%);
      padding: 80px;
      border-radius: 15px;
      
  }
  .tela-login input{
      padding: 15px;
      border: none;
      outline: none;
  }
  .inputSubmit{
      background-color: #e05522;
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 10px;
      color: white;
      font-size: 16px;
  }
  .inputSubmit:hover{
      background-color: #ed8631;
      cursor: pointer;
  }
  .voltar{
    text-decoration: none;
    color:white;
  }
  .voltar:hover{
    color: #44240e;
  }
</style>

<body class="login">
  <a class="voltar" href="index.php">Voltar</a>
  <div class="tela-login">
    <h1 align="center">UNIZON</h1>
    <h2 align="center">Administrador</h1>
    <h1>Login</h1>
    <form action="testLoginADM.php" method="POST" >
      <input type="text" name="email" placeholder="E-mail">
      <br><br>
      <input type="password" name="senha" placeholder="Senha">
      <br><br>
      <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </form>
  </div>
</body>
</html>
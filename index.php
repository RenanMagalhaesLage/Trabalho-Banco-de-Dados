<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>UNIZON</title>
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
      background-color: dodgerblue;
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 10px;
      color: white;
      font-size: 16px;
  }
  .inputSubmit:hover{
      background-color: deepskyblue;
      cursor: pointer;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.7);
    padding: 40px;
    border-radius: 15px;
    text-align: center;
  }
  .box a{
      text-decoration: none;
      color: white;
      border: 3px solid rgb(244, 180, 43);
      padding: 15px;
      border-radius: 10px;
  }
  .box a:hover{
    background-color: rgb(244, 180, 43);
  }
  .adm{
    margin-left: 925px;
    margin-top: 900px;
    width: 100px;
  }
  .adm a{
    background-color: #ed8631;
    text-decoration: none;
    color: white;
    border: 3px solid #ed8631;
    padding: 15px;
    border-radius: 10px;
  }
  .adm a:hover{
    background-color: #ff943c;
    border-color: #ff943c;
  }
  /*
  Laranja: #e05522
  Laranja2: #ed8631
  Laranja3:  #f8bd62
  Amarelo: #ffd148
  Marrom Claro: #44240e
  Marrom Escuro: #29180c
  Cinza claro: #e7eaeb
  Cinza #c6c6c6
  */
</style>
<body class="login">
    <div class="box">
      <img src="icone.png">
      <h1>Universidade Horizonte</h1>
      <h1>Bem Vindo!</h1>
      <br><br>
      <a href="loginAluno.php">Sou Aluno</a>
      <a href="loginProf.php">Sou Professor</a>
    </div>
    <div class="adm" >
      <a href="admin.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
      <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
      </svg></a>
    </div>

</body>

</html>
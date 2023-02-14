<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $RA = $_POST['RA'];
        $pNome = $_POST['pNome'];
        $mNome = $_POST['mNome'];
        $uNome = $_POST['uNome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $dataNasc = $_POST['dataNasc'];
        $endereco = $_POST['endereco'];
        $codCurso = $_POST['codCurso'];

        $sqlUpdate = "UPDATE aluno SET RA='$RA', pNome='$pNome',mNome='$mNome',uNome='$uNome', email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',dataNasc='$dataNasc', endereco='$endereco', codCurso='$codCurso' WHERE RA='$RA'";
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: listarAlunos.php');
?>
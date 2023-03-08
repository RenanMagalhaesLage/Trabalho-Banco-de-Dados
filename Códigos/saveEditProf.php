<?php
    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
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

        $sqlUpdate = "UPDATE professor SET pNome='$pNome',mNome='$mNome',uNome='$uNome',email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',dataNasc='$dataNasc',titulo='$titulo',dataContratacao='$dataContratacao', salario='$salario',codDep='$codDep' WHERE id='$id'";
        $result = $conexao->query($sqlUpdate);
    }
    header('Location: listarProf.php');
?>
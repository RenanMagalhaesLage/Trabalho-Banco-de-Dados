<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        /*Acessa o sistema se existir um submit*/
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM professor WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nome']);
            unset($_SESSION['email']);
            header('Location: loginProf.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: homeProf.php');
        }
    }
    else{
        /*Não acessa o sistema*/
        header('Location: loginProf.php');
    }
?>
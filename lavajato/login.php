<?php
    session_start();
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $cripto = base64_encode($senha);
    $logar = mysqli_query($conn, "SELECT * FROM usuario WHERE login='$login' AND senha='$cripto'");
    if(mysqli_num_rows($logar)>0){
        $_SESSION["user"] = $_POST['login'];
        $dados = mysqli_fetch_assoc($logar);
        header("location:loja.php");
    }
    else {
        echo "<script>alert('Login ou senha incorreto!');</script>";
        echo "<script>window.location.replace('logar.php');</script>";
    }
    mysqli_close($conn);
?>
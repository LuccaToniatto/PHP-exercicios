<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='".$usuario."' AND tipo='Administrador'";
    $result = $conn->query($menu_query);
    if($result->num_rows>0){
        echo "<a href='loja.php'type='button' class='btn btn-'>HOME </a></button>";
        echo "<a href='usuario.php'type='button' class='btn btn-'>USUÁRIO </a></button>";
        echo "<a href='sair.php'type='button' class='btn btn-'>Sair </a></button>";
    }
    else{
        echo "<a href='loja.php'type='button' class='btn btn-'>HOME </a></button>";
        echo "<a href='sair.php'type='button' class='btn btn-'>Sair </a></button>";
    }
?>
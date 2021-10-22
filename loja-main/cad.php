<?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $cidade = $_POST['cidade'];
    $data_nascimento = $_POST['data_nascimento'];
    $sql= "INSERT INTO pessoa(nome,email,celular,cidade,data_nascimento) VALUES ('$nome','$email','$celular','$cidade','$data_nascimento')";
    if(mysqli_query($conn,$sql)){
        echo "<script>window.location.href='loja.php';
          </script>";
    }
    else {
        echo "<script>window.location.href='loja.php'</script>";
    }
    mysqli_close($conn);
?>
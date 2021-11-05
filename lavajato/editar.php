<?php

  include 'conecta.php';

  $id = $_GET["id"];
  $nome = $_POST["nome"];
  $celular = $_POST["celular"];
  $placa = $_POST["placa"];
  $cidade = $_POST["cidade"];
  $data_nascimento = $_POST["data_nascimento"];

$sql = "UPDATE cliente SET nome = ?, celular = ?, placa_carro = ?, cidade = ?, data_nas = ? WHERE id = ?";
$stmt = $conn->prepare($sql) or die($conn->error);

if(!$stmt){
  echo 'Erro na atualização: '. $conn->errno .' - '. $conn->error;
}

$stmt->bind_param('ssssdi', $nome, $celular, $placa, $cidade, $data_nascimento, $id);
$stmt->execute();
$conn->close();
header("Location: usuario.php#tabs-4");
?>
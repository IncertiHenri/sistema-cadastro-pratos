<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuario (nome,email) VALUES ('$nome','$email')";

$conn->query($sql);

header("Location:../index.php");
exit;

?>
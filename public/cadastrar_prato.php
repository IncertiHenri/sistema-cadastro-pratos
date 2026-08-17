<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$id_usuario = $_GET["id_usuario"];

$sql = "INSERT INTO prato (nome, descricao, preco, categoria, id_usuario) VALUES ('$nome','$descricao','$preco', '$categoria', '$id_usuario')";

$conn->query($sql);

header("Location:formulario_cadastro_pratos.php");
exit;

?>
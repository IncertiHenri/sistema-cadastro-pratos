<?php

include("../infra/conexao.php");

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

header("Location:../index.php");
exit;

echo "Nome: " . $nome . "<br>";
echo "Descrição: " . $descricao . "<br>";
echo "Preço: " . $preco . "<br>";
echo "Categoria: " . $categoria . "<br>";
=

?>
<?php

include("../infra/conexao.php");

$id = $_GET["id"];

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

if (empty($nome) || empty($descricao) || empty($preco) || empty($categoria)) {
    die("Preencha todos os campos.");
}

$sql = "UPDATE prato SET nome = ?, descricao = ?, preco = ?, categoria = ? WHERE id_prato = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssdsi", $nome, $descricao, $preco, $categoria, $id);

$stmt->execute();

header("Location: ../index.php");
exit;

?>
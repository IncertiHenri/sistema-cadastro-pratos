<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM prato WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

$prato =mysqli_fetch_assoc($resultado);

?>

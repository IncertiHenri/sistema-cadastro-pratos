<?php

include("../infra/conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM usuario WHERE id = $id";

$conn->query($sql);

header("Location:../index.php");
exit;

?> 
<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$db = "sistema_pratos";

$conn = new mysqli($host, $usuario, $senha, $db);

if ($conn->connect_error) {
    die("Falha na conexão");
}

$conn->set_charset("utf8mb4");

echo "Conectado com sucesso!";

?>

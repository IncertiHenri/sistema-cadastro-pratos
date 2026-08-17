<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de pratos</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

<h1>Pratos cadastrados!</h1>

<table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Usuário</th>
                </tr>

    <?php

    include("../infra/conexao.php");
    
    ?>

    <?php
    $id = $_GET["id"];

    $sql = "SELECT * FROM prato WHERE id_usuario = $id";

    $pratos = $conn->query($sql);

    while ($prato = mysqli_fetch_assoc($pratos)) {
    ?>

                    <tr>
                        <td><?php echo $prato["id_prato"] ?></td>
                        <td><?php echo $prato["nome"] ?></td>
                        <td><?php echo $prato["descricao"] ?></td>   
                        <td><?php echo $prato["preco"] ?></td>
                        <td><?php echo $prato["categoria"] ?></td>
                        <td><?php echo $prato["id_usuario"] ?></td>    
                        <td>
                            <a href="public/excluir_prato.php?id=<?php echo $prato["id_prato"] ?>">Excluir prato</a>
                        </td>   
                    </tr>
    <?php } ?>


</body>
</html>
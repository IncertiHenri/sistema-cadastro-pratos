<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar prato</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <h1>Cadastrar pratos do usuário!</h1>

    <?php
    include("../infra/conexao.php");

    ?>
    
    <?php
    $sql = "SELECT id_usuario FROM usuario";

    $usuarios = $conn->query($sql);
    
    $usuario = mysqli_fetch_assoc($usuarios);

    ?>

    <form action="cadastrar_prato.php?id_usuario=<?php echo $usuario["id_usuario"] ?>" method="POST">
        <label for="nome">Nome do prato: </label>
        <input type="text" name="nome" required>
        <label for="descricao">Descrição do prato: </label>
        <input type="text" name="descricao" required>
        <label for="preco">Preço do prato: </label>
        <input type="number" name="preco" inputmode="decimal" required>
        <label for="categoria">Categoria do prato: </label>
        <input type="text" name="categoria" required>
        <button type="submit">Cadastrar</button>
    </form>



</body>
</html>
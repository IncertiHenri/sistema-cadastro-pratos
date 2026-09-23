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
    $sql = "SELECT id_usuario, nome FROM usuario";

    $usuarios = $conn->query($sql);

    ?>

    <form action="cadastrar_prato.php" method="POST">

    <label for="id_usuario">Usuário responsável:</label>

    <select name="id_usuario" required>
        <option value="">Selecione um usuário</option>

        <?php while ($usuario = mysqli_fetch_assoc($usuarios)) { ?>
            <option value="<?php echo $usuario["id_usuario"]; ?>">
                <?php echo $usuario["nome"]; ?>
            </option>
        <?php } ?>
    </select> 
    
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
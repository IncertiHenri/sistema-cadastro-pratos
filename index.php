<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include("infra/conexao.php")?>

    <h1>Bem vindo ao cadastro de usuário!</h1>
    
    <div>

    <form action="public/cadastrar_usuario.php" method="POST">
        <label for="nome">Nome do usuário: </label>
        <input type="text" name="nome" required>
        <label for="email">E-mail do usuário: </label>
        <input type="email" name="email" required>
        <button type="submit">Cadastrar</button>
    </form>

    <a href="public/listar_pratos.php">Verificar pratos</a>

    </div>

    <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                </tr>

    <?php
    
    $sql = "SELECT * FROM usuario";

    $usuarios = $conn->query($sql);

    while ($usuario = mysqli_fetch_assoc($usuarios)) {
    ?>

                    <tr>
                        <td><?php echo $usuario["id_usuario"] ?></td>
                        <td><?php echo $usuario["nome"] ?></td>
                        <td><?php echo $usuario["email"] ?></td>   
                        <td>
                            <a href="public/formulario_cadastro_pratos.php?id=<?php echo $usuario["id_usuario"] ?>">Cadastrar prato</a>
                            <a href="public/listar_pratos_usuario.php?id=<?php echo $usuario["id_usuario"] ?>">Verificar pratos do usuário</a>
                        </td>           
                    </tr>
    <?php } ?>

</body>
</html>
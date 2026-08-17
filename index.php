<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo ao cadastro de usuário</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include("infra/conexao.php")?>

    <h1>Cadastro de usuários</h1>
    
    <form action="public/cadastrar_usuario.php" method="GET">
        <label for="nome">Nome do usuário: </label>
        <input type="text" name="nome">
        <label for="email">E-mail do usuário: </label>
        <input type="email" name="email">
        <button type="submit">Cadastrar</button>
    </form>


</body>
</html>
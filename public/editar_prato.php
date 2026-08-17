<?php

include "../infra/conexao.php";

$id = $_GET["id"];

$sql = "SELECT * FROM prato WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("i", $id);

$stmt->execute();

$resultado = $stmt->get_result();
$prato = $resultado->fetch_assoc();

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar prato</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>

    <h1>Editar prato!</h1>


    <form action="atualizar_prato.php?id_usuario=<?php echo $prato["id"] ?>" method="POST">

        <label for="nome">Nome do prato: </label>
        <input type="text" name="nome" value="<?php echo $prato["nome"]; ?>"  required>

        <label for="descricao">Descrição do prato: </label>
        <input type="text" name="descricao" value="<?php echo $prato["descricao"]; ?>" required>

        <label for="preco">Preço do prato: </label>
        <input type="number" name="preco" inputmode="decimal" value="<?php echo $prato["preco"]; ?>" required>

        <label for="categoria">Categoria do prato: </label>
        <input type="text" name="categoria" value="<?php echo $prato["categoria"]; ?>" required>

        <button type="submit">Salvar alterações</button>
        
    </form>



</body>
</html>

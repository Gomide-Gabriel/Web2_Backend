<?php

$nome = "";
$email = "";
$telefone = "";

if ($SERVER["REQUEST METHOD"] == "POST"){
    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["nome"] ?? "";
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 10/04</title>
    </head>
    <body>
        <h1>Cadastro do Usuário</h1>
        <h3>Preencha os dados abaixo:</h3>

        <form id="cadastro">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone" required><br>

            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" required><br>

            <button type="submit" id="enviar">Enviar</button>
        </form>

        <h2>Registros:</h2>

        <p id="registro">

        </p>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>

            <h2> </h2>
            <p>Dados recebidos pelo servidor </p>
            <p><strong>Nome::<strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>Email::<strong> <?php echo htmlspecialchars($email);?></p>
            <p><strong>Telefone::<strong> <?php echo htmlspecialchars($telefone);?></p>

        <?php endif; ?>
    

    </body>
</html>
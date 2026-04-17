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

        <script>
            const cadastro = document.getElementById("cadastro");
            const registro = document.getElementById("registro");
            

            cadastro.addEventListener("submit", function(event){
                event.preventDefault()

                const nome = document.getElementById("nome").value;
                const telefone = document.getElementById("telefone").value;
                const email = document.getElementById("email").value;

                console.log(email);

                registro.innerHTML = `<br>Registros: <br> nome: ${nome}<br> telefone: ${telefone}<br> email: ${email}`;
            }); 

        </script>

    </body>
</html>
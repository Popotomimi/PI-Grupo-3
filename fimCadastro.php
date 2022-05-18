<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Cadastro</title>
</head>
<body>

<?php

    $db = new PDO('mysql:host=localhost;dbname=pi;charset=utf8', 'root', 'popoto100200300');
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $encaminha = $db->exec("INSERT INTO `usuarios` (`email`,`nome`,`senha`) VALUES ('$email', '$nome', '$senha')"); 
?>
    <main class="container">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1>Volte e tente se logar</h1>
                        <span class="message">
                            Cadastro Realizado!
                        </span>
                    </div>
                </div>
            </div>
    </main>
    <div class="container">
        <a href="login.php">Voltar</a>
    </div>
    <footer></footer>
</body>
</html>
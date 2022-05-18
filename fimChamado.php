<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <script src="data.js"></script>
    <title>Chamado</title>
</head>

<body>

    <?php

    $mensagem = "";
    try {

        $conn = new PDO('mysql:host=localhost;dbname=pi;charset=utf8', 'root', 'popoto100200300');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $descricao = $_POST["descricao"];
        $status = 'Aberto';
        $usuario_id = $_POST["usuario_id"];
        $encaminha = $conn->exec("INSERT INTO `chamados` (`descricao`,`status`,`usuario_id`) VALUES ('$descricao', '$status', '$usuario_id'); ");
        $mensagem = "Chamado registrado.";
    } catch (PDOException $e) {
        $mensagem = "Falha ao criar chamado: " . $e->getMessage();
    }
    $conn = null;
    ?>
    <main class="container">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h1>Detalhes do chamado:</h1>
                    <span>
                        <?php echo "$descricao <br>"; ?>
                        <?php echo $mensagem; ?>
                    </span>
                </div>
            </div>
        </div>
    </main>
    <div class="container">
        <a href="chamado.php">Voltar</a>
    </div>
    <footer></footer>
</body>

</html>
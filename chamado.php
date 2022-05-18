<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Abrir chamado</title>
</head>

<body>
    <?php
    session_start();
    $db = new PDO('mysql:host=localhost;dbname=pi;charset=utf8', 'root', 'popoto100200300');

    if (array_key_exists('email', $_POST) && array_key_exists('senha', $_POST)) {
        $res = $db->query("SELECT * FROM `usuarios` WHERE `email` = '{$_POST['email']}'");
        $linha = $res->fetch();

        debug_to_console($linha);

        if ($linha['senha'] === $_POST['senha']) {
            $_SESSION['usuario_id'] = $linha['id'];
            $usuario = $linha;
        }
    }

    if (array_key_exists('usuario_id', $_SESSION) && $_SESSION['usuario_id'] && !isset($usuario)) {
        $res = $db->query("SELECT * FROM `usuarios` WHERE `id` = '{$_SESSION['usuario_id']}'");
        $usuario = $res->fetch();
    }

    if (isset($usuario)) { ?>
        <h1 class='text-center'>Seja bem-vindo(a) "<?php echo $usuario['nome'] ?>"!</h1>
    <?php
    } else {
        header("Location: login.php");
    }

    function debug_to_console($data)
    {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }
    ?>
    <main class="container">
        <form method="post" action="fimChamado.php">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h1>Abrir novo chamado</h1>
                    </div>
                </div>

                <div class="form-label-group">
                    <div>
                        <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION['usuario_id'] ?>">
                        <input type="text" name="descricao" id="descricao" class="form-control chamado" placeholder="Digite aqui qual é o problema" required autofocus><br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">&#8679;&nbsp;Enviar</button>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="meusChamados.php">Ver meus chamados</a>
                </div>
            </div>
        </form>
    </main>

    <footer></footer>
</body>

</html>
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
    <title>Abrir chamado</title>
</head>
<body>
<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=pi;charset=utf8', 'root', 'popoto100200300');

if(array_key_exists('email', $_POST) && array_key_exists('senha', $_POST)){
    $res = $db->query("SELECT * FROM `usuarios` WHERE `email` = '{$_POST['email']}'" );
    $linha = $res->fetch();

    if($linha && $linha['senha'] === $_POST['senha']){
        $_SESSION['usuario_id'] = $linha['id'];
        $usuario = $linha;
    }
}

if(array_key_exists('usuario_id', $_SESSION) && $_SESSION['usuario_id'] && !isset($usuario)){
    $res = $db->query("SELECT * FROM `usuarios` WHERE `id` = '{$_SESSION['usuario_id']}'" );
    $usuario = $res->fetch();
}

if(isset($usuario)){?>
    
    <?php 
} else {
    header("Location: login.php"); 
?>
   
<?php
} // fim do if ?>
<?php 
    $chamado = $_POST["nome"];
?>
    <main class="container">
        <div id="dataHora" class="card">
            <?php 
                echo "<h1>Detalhes do chamado: </h1>".$chamado;
            ?>
            <script>
                formataData(15);
            </script>
        </div>
    </main>
    
    <footer></footer>
</body>
</html>
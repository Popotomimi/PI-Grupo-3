<html lang="pt-BR">
<head>
	<title>banco de dados</title>
</head>
<body>

<!-- Acessando o banco de dados -->
    <?php  $db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');
$resultado = $db->query('SELECT * FROM usuarios');
$linha = $resultado->fetch();

echo $linha['nome'];
 ?>

<!-- Pesquisando no banco de dados -->

<?php
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');
$consulta = $db->query('SELECT * FROM usuarios');
$usuarios = $consulta->fetchAll();

echo '<h1>Lista de usuários</h1>';
echo '<ul>';
foreach($usuarios as $u) {
    echo '<li>';
    echo $u['nome'] . ' - ' . $u['email'];
    echo '</li>';
}
echo '</ul>';?>


<!-- Inserindo no banco de dados -->
<?php
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');
$linhas_afetadas = $db->exec("INSERT INTO `usuarios` (`email`, `nome`, `senha`) VALUES ('andre@dasilva.com', 'André', '456789')");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}?>

<!-- Alterando dados do banco de dados -->
<?php
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');
$linhas_afetadas = $db->exec("UPDATE `usuarios` SET `email` = 'jose@dasilva.com', `nome` = 'José' WHERE `id` = 1");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}?>


<!-- Apagando linhas em um banco de dados -->
<?php
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');
$linhas_afetadas = $db->exec("DELETE FROM `usuarios` WHERE `id` = 2");

if($linhas_afetadas > 0){
    echo $linhas_afetadas . ' linhas foram afetadas';
} else {
    echo 'Nenhuma linha foi afetada!';
}?>

<!-- Sistema completo de login e senha. -->
<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=meu_banco;charset=utf8', 'root', 'popoto100200300');

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
    <h1>Seja bem-vindo "<?php echo $usuario['nome'] ?>"!</h1>
    <p>O seu e-mail é <?php echo $usuario['email'] ?></p>
<?php 
} else {
?>
    <h1>Faça seu login!</h1>
    <form action="" method="post">
        <div><label for="email">E-mail: </label><input type="text" id="email" name="email"></div>
        <div><label for="senha">Senha: </label><input type="password" id="senha" name="senha"></div>
        <button type="submit">Login</button>
    </form>
<?php
} // fim do if ?>
</body>
</html>
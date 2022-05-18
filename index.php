<?php 
require 'inicio.php'?>

<h1>Meu Formulário </h1>

<?php 
	if(isset($_POST['nome_usuario'])) {
		echo '<h2>Olá, '. $_POST['nome_usuario'] . '</h2>';
	}
?>

<form method="post">
	<label for="campo_de_nome">Digite seu nome</label>
	<input name="nome_usuario" id="campo_de_nome" type="text">
	<button type="submit">Enviar</button>
</form>

<?php $nomes = ["André", "Bruno", "Carlos", "Diego", "Eduardo"];?>
	<ul>
		<?php foreach($nomes as $nome){
			echo "<li>$nome</li>";
		}
		?>
	</ul>

	<?php $cesta = [
		'banana' => 12,
		'laranja' => 6,
		'abacaxi' => 2
	];?>
	<p>A cesta contém</p>
	<ul>
		<?php foreach($cesta as $fruta => $quantidade){
			echo "<li>$fruta "." - ". "$quantidade</li>";
		}
		?>
	</ul>

	<?php $sabores = ['Mussarela', 'Calabresa', 'Portuguesa'];?>

	<?php 
		if(array_key_exists('sabores', $_POST)){
		foreach($_POST['sabores'] as $sabor_escolhido){
			echo 'Você escolheu o sabor ' . $sabor_escolhido . '<br>';
	}
	}?>

	<form method="post">
    <?php foreach($sabores as $sabor){ ?>
        <input type="checkbox" name="sabores[]" id="<?php echo $sabor?>" value="<?php echo $sabor?>">
        <label for="<?php echo $sabor?>"><?php echo $sabor?></label>
    <?php } ?>
    <button type="submit">
        Enviar
    </button>
</form>

<h1>Qual seu nome?</h1>
<form method="post">
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>

<!-- Isso aqui em baixo serve para a pessoa escrever o nome e quando clica em enviar 
vai para o servidor que armazena o nome em um arquivo .txt e o w significa que
vai escrever por cima se o arquivo já existir e se não existir vai criar um -->
<?php
if(array_key_exists('nome', $_POST)){
    $fh = fopen('nome.txt', 'a');
    fwrite($fh, $_POST['nome']);
    fclose($fh);
}?>

<?php
require 'fim.php';
?>
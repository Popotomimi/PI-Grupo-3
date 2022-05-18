<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="quiz.css">
    <title>Verificador</title>
</head>
<header>
    <div class="row fixed-top justify-content-between topo">
        <h1>Resultado</h1>
    </div>
</header>
<body>
    <?php 
        $certas = 0;
    ?>

    <div class="container">
    <h1>1. Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?</h1>

    <?php 
        if ($_POST["primeira"] == "b"){
            echo "<h2>Você acertou</h2>";
            $certas++;
        }else {
            echo "<h2>Você errou</h2>";
        }
    ?>
        <h4> Alternativa correta ---> B: Entre 4 a 6 litros. São retirados 450 mililitros.</h4>
        <p>A quantidade de sangue varia de pessoa para pessoa. O volume de sangue é entre 7% e 8% o peso corporal. Assim, um adulto com 50 e 80 quilos, pode ter entre 4 e 6 litros de sangue, respectivamente. <br>
        Portanto, 4 a 6 litros é a alternativa que compreende a quantidade mais próxima de adultos com pesos diferentes.</p>
    </div>

    
    <div class="container">
    <h1>2. Quais o menor e o maior país do mundo?</h1>

    <?php 
        if ($_POST["segunda"] == "a"){
            echo "<h2>Você acertou</h2>";
            $certas++;
        }else {
            echo "<h2>Você errou</h2>";
        }
    ?>
        <h4> Alternativa correta ---> A: Vaticano e Rússia.</h4>
        <p>O Vaticano, sede da igreja católica, tem apenas 44 hectares (0,44 km2). A Rússia, localizada em dois continentes (Ásia e Europa), tem 17 milhões de km2.</p>
    </div>



    <div class="container">
    <h1>3. O que a palavra legend significa em português?</h1>

    <?php 
        if($_POST["terceira"] == "d"){
            echo "<h2>Você acertou</h2>";
            $certas++;
        } else {
            echo "<h2>Você errou</h2>";
        }
    ?>
        <h4> Alternativa correta ---> D: Lenda.</h4>
        <p>Legend, que parece significar “legenda”, faz parte do grupo dos falsos cognatos. Falsos cognatos são palavras de línguas distintas que apresentam semelhanças na grafia e/ou na pronúncia, mas cujos significados são diferentes. Outros exemplos são: costume, que significa fantasia, e to push, que significa empurrar.</p>
    </div>

    <div class="container">
    <h1>4. Qual o maior animal terrestre?</h1>

    <?php 
        if($_POST["quarta"] == "c"){
            echo "<h2>Você acertou</h2>";
            $certas++;
        }else {
            echo "<h2>Você errou</h2>";
        }
    ?>
        <h4> Alternativa correta ---> C: Elefante africano.</h4>
        <p>O elefante africano é o maior animal terrestre. Ele pode medir até 4 metros de altura e 7 de comprimento. Seu peso pode chegar até 8 toneladas.</p>
    </div>

    <?php
    if($certas <= 0){
        echo "<div><h2>Você não acertou nem uma.</h2></div>";
    } else if ($certas >= 4){
        echo "<div><h2>Parabéns você acertou tudo!!!</h2></div>";
    } else {
        echo "<div><h2>Você acertou ".$certas." vezes!!!</h2></div>";
    }
    ?>
    <footer class="row topo"><p> Criado por Roberto de Oliveira Soares / Todos os direitos reservados.</p></footer>
</body>
</html>
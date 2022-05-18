
<html lang="pt-BR">
<head>
<style type="text/css">
        body {
            background-color: #007FFF;
        }

        div{
            border: solid black 3px;
            padding: 50px;
            position: absolute;
            left: 600px;
            top: 150px;
            border-radius: 15px;
            text-align: center;
            background-color: #add8e6;
            font-size: 25px;
        }
        a {
            border: solid black 3px; 
            border-radius: 15px;
            color: white;
            background-color: #007FFF;
            padding: 10px;
        }
    </style>
	<title>Resultado do índice massa corporal (IMC)</title>
</head>
<body>
    <div>
    <?php 
        if($_POST['peso_usuario'] == null){
            echo("<h2>Volte e preencha o formulário!!</h2>");
        } else {
            $altura = $_POST["altura_usuario"];
            $nome = $_POST["nome_usuario"];
            $peso = $_POST["peso_usuario"];
            echo "<p> ". $nome . ", você tem " . $altura . " de altura e seu peso é " . $peso . "</p>";
            calcular($altura, $peso);
            }
    ?>
    <br>
    <br>
    <a href="calculoimc.php">Voltar</a>
    <?php 
    function calcular($altura, $peso){
        $valorIMC = ($peso / ($altura * $altura));
        $valorIMC = number_format($valorIMC,2,',','');
        echo "<p> Seu IMC é " . $valorIMC . "</p>";
        $tabela = [
            'Magreza' => 18.5,
            'Saudável' => 24.9,
            'Sobrepeso' => 29.9,
            'Obesidade Grau I' => 34.9,
            'Obesidade Grau II' => 39.9,
            'Obesidade Grau III' => 40.9
        ];
        foreach($tabela as $classificacao => $faixa){
            if($faixa <= 18.5 && $valorIMC <= 18.5){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            } else if ($faixa >= 18.51 && $valorIMC <= 24.9){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            } else if ($faixa >= 25.0 && $valorIMC <= 29.9){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            } else if ($faixa >= 30 && $valorIMC <= 34.9){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            } else if ($faixa >= 35 && $valorIMC <= 39.9){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            } else if($faixa >= 40 && $valorIMC >= 40){
                echo "Atenção, seu IMC é $valorIMC, e você está classificado como $classificacao";
                break;
            }
		}
    }
    ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lindo código</title>
</head>
<body>
    <?php
    
        $nome = "Arthur";
        $idade = 22; 

        echo "Olá $nome <br> Você tem $idade anos <br>";

        if ($idade >=18){
            echo " você é maior de idade";
        }

        else {
            echo " voce é de menor";
        }

        $notas = [5, 7, 10, 9];

        //print_r ($notas);

    for ($i = 0; $i < count($notas); $i++){
        echo $notas[$i] . "<br>";
    }

    foreach ($notas as $item) { //a diferença é que esse é dinamico, nao diz onde inicia, incrementa, condicao....
        echo $item . "<br>";
    }

    $nomes = ["ellen six", "arthur seveeennnn",];

    for ($i = 0; $i < count($nomes); $i++){
        echo $nomes[$i] . "<br>";
    }

    foreach ($nomes as $item) { //a diferença é que esse é dinamico, nao diz onde inicia, incrementa, condicao....
        echo $item . "<br>";
    }

    $carro = ['modelo'=>"Mustang", 'cor' => "Branco", 'ano' => 2026];

    echo $carro['modelo'] . "-" . $carro['cor'];
    ?>

    <p>Meu site <?= $carro['modelo'] . "- ano" . $carro['ano']  ?></p>

    <?php 
        include "./aula02.php";
    ?>
</body>
</html>
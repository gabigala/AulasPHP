<?php
    // definindo vetor ou array de pessoas
    $pessoas = [
        [
            "nome"=> "Roberto Souza",
            "idade"=> 28,
            "feminino"=> false,
        ],
        [
            "nome"=> "Ruth Oliveira",
            "idade"=> 20,
            "feminino"=> true,
        ],
        [
            "nome"=> "Adamastor Narciso",
            "idade"=> 27,
            "feminino"=> false,
        ]
    ];

$pos=2;
$pessoa = $pessoas [$pos];

//echo("<pre>");
//var_dump($pessoas);//
//print_r($pessoa);
//echo("<pre>");
//die("Morreu!!!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    <?php foreach ($pessoas as $pos=>$pessoa){ ?>
    }

    ?>
    <div class="pessoa">
        <img src="./img/foto<?=$pos?>.jpeg" alt="<?= $pessoa ["nome"];?>">
        <div class="dados">
                <div class="info">
                <span>Nome:</span>
                <div> <?= $pessoa ["nome"];?> </div>
                </div>
                <div class="info">
                <span>Idade:</span>
                <div> <?= $pessoa ["idade"]; ?> </div>
                </div>
                <div class="info">
                <span>Sexo:</span>
                <div>
                    <?php
                    
                    //if ($pessoa["masculino"]) {
                    //    echo ("Masculino");
                    //} else {
                    //    echo ("Feminino");
                    //}
                    // - forma menos simplificada//

                    //echo ($pessoa1 ["feminino"] ? "Feminino": "Masculino");
                
                    ?>
                    <?= $pessoa ["feminino"] ? "Feminino" : "Masculino"?>
                    
                </div>
                </div>
        </div>
    </div>
</body>
</html>
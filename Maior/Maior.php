<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>PHP Maior</title>
</head>

<body class="bg-dark text-light">
<?php

    $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
    $valor2 = isset($_POST['valor2']) ? $_POST['valor2'] : 0;
?>

    <div class="container p-3">
        <h1 class="text-center text-decoration-underline">Verificar o Maior número - Resultado</h1>
        <div class="mt-3 w-50 position-absolute start-50 translate-middle-x border border-primary p-5 rounded">
            <h2 class="text-center">
            <?php
                if($valor1 > $valor2)
                    echo("O Maior Número é o $valor1");
                else if($valor1 < $valor2)
                    echo("O Maior Número é o $valor2");
                else
                    echo("Ambos números são iguais")
            ?>
            </h2>
        </div>
    </div>

</body>

</html>
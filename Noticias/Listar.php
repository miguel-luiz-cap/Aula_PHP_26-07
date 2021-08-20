<?php
include_once("Matriz_Noticias.inc");
$assunto = $_POST["assunto"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Noticias sobre Tecnologia - <?= $assunto ?></title>
</head>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <h1 class='p-2 m-2 bg-info text-white text-center'> Noticias sobre Tecnologia - <span class='text-warning'><?= $assunto ?></span> </h1>
        <div class='container mt-4'>
            <div class='row'>
                <?php
                for ($i = 0; $i < count($matriz_noticias); $i++) :
                    if ($assunto != $matriz_noticias[$i][0])
                        continue;

                ?>
                <div class='col text-center'>
                    <a class="text-decoration-none text-body" href="Detalhes.php?noticia_id=<?=$i?>">
                    <p class='fw-bold text-info'>
                        <?= $matriz_noticias[$i][1] ?>
                    </p>

                    <img class='img-thumbnail' src='<?= $matriz_noticias[$i][3] ?>' alt='Foto da Notícia' />
                    <p align="justify"> <!-- class='text-justify'> -->
                        <?= $matriz_noticias[$i][2] ?>
                    </p>
                    </a>
                </div>

                <?php
                endfor;
                ?>
            </div>
        </div>

        <a class="btn btn-primary col-12 mt-5 btn-lg" href="index.php" role="button">Voltar</a>
    </div>

    <img src="https://scrashteste.000webhostapp.com/avatar_get.php?friendid=76561198249204002">
</body>

</html>


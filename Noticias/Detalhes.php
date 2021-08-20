<?php
include_once("Matriz_Noticias.inc");
$id = $_GET["noticia_id"];
$assunto = $matriz_noticias[$id][0];
$titulo = $matriz_noticias[$id][1];
$noticia = $matriz_noticias[$id][2];
$imagem = $matriz_noticias[$id][3];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Noticias sobre Tecnologia - <?= $titulo ?></title>
</head>

<body>
    <div class="container border m-4 p-2 mx-auto">
        <h1 class='p-2 m-2 bg-info text-white text-center'> Noticias sobre Tecnologia - <span class='text-warning'><?= $assunto ?></span> </h1>
        <div class='container w-75 mt-5'>
            <div class='row'>
                <div class='col text-center'>
                    <p class='fw-bold text-uppercase'> <?= $titulo ?> </p>
                    <img class='img-thumbnail' src='<?= $imagem ?>' alt='Foto da Notícia' />
                    <p align="justify">
                        <!--class='text-justify'--> 
                        <?= $noticia ?>
                    </p>
                </div>
            </div>
        </div>

        <a class="btn btn-primary col-12 mt-5 btn-lg" href="index.php" role="button">Voltar</a>
    </div>
</body>
</html>

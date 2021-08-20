<?php
include_once("Matriz_Estados.inc");
$regiao = $_POST["regiao"];



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Estados</title>
</head>

<body>
    <div class="container border m-4 p-2 w-75 mx-auto">
        <h1 class='p-2 bg-info text-white'> Estados da Região <?= $regiao?> </h1>
        
            <?php
                for($i = 0; $i < count($estados); $i++ ) {
                    if($regiao != $estados[$i][3])
                    continue;
                    
                    echo(
                    "<div class='row p-2'><div class='col my-auto'>".
                    "<h6 class='text-muted'>Estados: <span class='text-info'>" .$estados[$i][1]. "</span></h6>".
                    "<h6 class='text-muted'>Sigla: <span class='text-info'>"  .$estados[$i][0]. "</span></h6>".
                    "<h6 class='text-muted'>Capital: <span class='text-info'>" .$estados[$i][2]. "</span></h6>".
                    "<h6 class='text-muted'>Região: <span class='text-info'>" .$estados[$i][3] . "</span></h6></div>" .
                    "<div class='col'>" .
                    "<img class='w-50 border d-block mx-auto' src='Imagens/" .$estados[$i][4] . "' alt='Bandeira do Estado' />" .
                    "</div></div>"
                    );
                }
            ?>   
        <a class="btn btn-primary col-12 mt-5 btn-lg" href="index.php" role="button">Voltar</a>
    </div>
</body>

</html>
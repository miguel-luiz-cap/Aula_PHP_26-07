<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Noticias sobre Tecnologia - Escolha o assunto</title>
</head>
<body>
    <div class="container border m-4 p-2 mx-auto">
        <h1 class='p-2 m-2 bg-info text-white text-center'>Noticias sobre Tecnologia</h1>

        <form action="Listar.php" method="post">

            <p>
                Assunto: <select name="assunto" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Mercado">Mercado</option>
                    <option value="Software">Software</option>
                </select>
            
            </p>

            <button class="btn btn-primary btn-lg" type="submit">Procurar</button>

        </form>

    </div>
</body>
</html>
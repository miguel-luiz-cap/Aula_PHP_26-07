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
    <div class="container p-3">
        <h1 class="text-center text-decoration-underline">Verificar o Maior número</h1>
        <div class="mt-3 w-50 position-absolute start-50 translate-middle-x border border-primary p-3 rounded">
            <form action="Maior.php" method="POST">
                <div class="mb-3">
                    <label for="valor1" class="form-label">Valor 1</label>
                    <input type="number" class="form-control" id="valor1" name="valor1">
                </div>
                <div class="mb-3">
                    <label for="valor2" class="form-label">Valor 2</label>
                    <input type="number" class="form-control" id="valor2" name="valor2">
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary col-12" type="submit">Verificar</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
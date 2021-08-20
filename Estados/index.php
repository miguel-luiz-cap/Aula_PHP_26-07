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
        <h1 class='p-2 bg-info text-white'>Estados Brasileiros</h1>

        <form action="Detalhes.php" method="post">

            <p>
                Selecione uma região: <select name="regiao" required>
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Centro-Oeste">Centro-Oeste</option>
                    <option value="Nordeste">Nordeste</option>
                    <option value="Norte">Norte</option>
                    <option value="Sudeste">Sudeste</option>
                    <option value="Sul">Sul</option>
                </select>
            
            </p>

            <button class="btn btn-primary btn-lg" type="submit">Detalhar</button>

        </form>

    </div>
</body>
</html>
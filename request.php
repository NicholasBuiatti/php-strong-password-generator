<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container text-center">
        <h1>Inserisci qua le tue richieste</h1>
        <form action="1passwordGenerator.php" method:"GET">
            <input type="number" name="nCaratteri" min="8" max="16">
            <button type="submit" class="btn btn-warning">Invia</button>
        </form>
    </div>
</body>

</html>
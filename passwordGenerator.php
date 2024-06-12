<?php
$nCaratteri = $_GET["nCaratteri"]

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1 class="text-center">Ecco la tua Password:</h1>
        <p>
            <?php
            for ($i = 0; $i < $nCaratteri; $i++) {
                echo "x";
            }

            ?>
        </p>
    </div>
</body>

</html>

<!-- Creare una pagina con un form. In questo form l'utente userà un input per selezionare la lunghezza della password da generare.
Il form redirezionerà su una nuova pagina, che in base alla lunghezza scelta stamperà N volte il carattere "X".

Fatelo con un ciclo che compone una stringa aggiungendo una X per volta e solo poi, alla fine, stampate l'intera stringa.

generiamo tante X quante ne richiede l'utente. -->
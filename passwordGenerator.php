<?php
$nCaratteri = $_GET["nCaratteri"];
$charList = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "!", "£", "$", "%", "&", "/", "=", "?", "^", "@", "#"];
$pass = "";
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
                $nRandom = rand(0, count($charList));
                $pass = $pass . $charList[$nRandom];
            }
            echo "<h2>" . $pass . "</h2>"
            // echo "<h2>" . $charList . "</h2>"
            ?>
        </p>
    </div>
</body>

</html>

<!-- Creare una pagina con un form. In questo form l'utente userà un input per selezionare la lunghezza della password da generare.
Il form redirezionerà su una nuova pagina, che in base alla lunghezza scelta stamperà N volte il carattere "X".

Fatelo con un ciclo che compone una stringa aggiungendo una X per volta e solo poi, alla fine, stampate l'intera stringa.

generiamo tante X quante ne richiede l'utente. 

MILESTONE 2
Sempre nella seconda pagina create una serie di caratteri consentiti (come stringa? come array?)  dove scriverete tutti i caratteri concessi: lettere maiuscole, minuscole, numeri, simboli... tutto insieme!
Ora nel ciclo che aggiungeva una "X" alla nostra password, aggiungete invece un carattere casuale preso dalla nostra lista dei caratteri consetiti.
Come? Ad ogni iterazione estraggo un numero casuale (tra 0 e....?) che uso come indice per pescare il carattere casuale. Questo lo aggiungo alla mia password.

generare una password casuale in base alla lunghezza scelta dall'utente.-->
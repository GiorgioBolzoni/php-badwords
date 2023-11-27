<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elaborazione Form</title>
</head>

<body>
    <?php
    // Verifico se sono stati inviati dati tramite GET
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Ottengo i dati dalla query string
        $paragrafo = $_GET["paragrafo"];
        $parolaDaCensurare = $_GET["parola"];

        // Stampo il paragrafo e la sua lunghezza
        echo "<h2>Paragrafo originale</h2>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo) . " caratteri</p>";

        // Sostituisco la parola da censurare con tre asterischi
        $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);

        // Stampo il paragrafo censurato e la sua lunghezza
        echo "<h2>Paragrafo censurato</h2>";
        echo "<p>$paragrafoCensurato</p>";
        echo "<p>Lunghezza: " . strlen($paragrafoCensurato) . " caratteri</p>";
    } else {
        // Se non ci sono dati nella query string, reindirizzo all'index.php
        header("Location: index.php");
        exit();
    }
    ?>
</body>

</html>
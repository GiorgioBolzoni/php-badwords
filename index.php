<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
</head>

<body>
    <h1>Form di Censura</h1>
    <form action="censura.php" method="get">
        <label for="paragrafo">Inserisci il paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="4" cols="50"></textarea><br>
        <label for="parola">Parola da censurare:</label><br>
        <input type="text" id="parola" name="parola"><br><br>
        <input type="submit" value="Invia">
    </form>
</body>

</html>
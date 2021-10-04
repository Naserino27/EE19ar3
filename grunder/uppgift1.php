<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 1</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Uppgift 1</h1>
        <?php
        // Två variabler för namn och adress
        $namn = "Karim";
        $adress = "Follingbogatan 26";
        // Skriv ut "Mitt namn är ..., jag bor på ...
        echo "Mitt namn är $namn, jag bor på $adress.<br>";
        // Variabler för kön och ålder
        $kön = "man";
        $ålder = 18;
        // Skriv ut "Jag är .. och jag är .. år."
        echo "Jag är en $kön och är $ålder år.<br>";
        ?>
    </div>
</body>
</html>
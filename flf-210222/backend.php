<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spara Highscore</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="kontainer">
        <h1>Resultatet</h1>
        <?php
        //Ta emot data i formuläret och spara i variabler
        $namnet = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
        $mobilen = filter_input(INPUT_POST, "mobil", FILTER_SANITIZE_STRING);
        $highscoret = filter_input(INPUT_POST, "highscore", FILTER_SANITIZE_STRING);

        //Testar
        //var_dump($namnet, $mobilen, $highscoret);

        //Kontroll att highscoren är korrekt
        if ($highscoret <= 0 || $highscoret > 1000) {
            //error meddelande
            echo "<p class=\"alert alert-danger\">Ajaj!! nu blev siffrorna lite knas, skriv ett riktigt highscore mellan 0-1000 :)</p>";
        } else {
            //Skriv ett fint svar
        echo "<p>$namnet din highscore är $highscoret</p>";
        echo "<p>$namnet ditt mobilnr är $mobilen </p>";

        file_put_contents("highscore.txt", "$namnet:$highscoret\n", FILE_APPEND);
        }
        

        
        ?>

        

    </div>
</body>

</html>
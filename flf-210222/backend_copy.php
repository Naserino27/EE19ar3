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
        $texten = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

        //Testar
        //var_dump($namnet, $texten, $highscoret);

        //Kontroll att highscoren är korrekt
        if (strlen($texten) <= 10 || strlen($texten) > 100) {
            //error meddelande
            echo "<p class=\"alert alert-danger\">Ajaj!! nu blev texten lite knas, skriv en riktig text mellan 10-100 karaktärer :)</p>";
        } else {
            //Skriv ett fint svar
        echo "<p>$namnet din text är sparad i $namnet.txt </p>";

        file_put_contents("$namnet.txt", "$namnet:$texten\n", FILE_APPEND);
        }
        

        
        ?>

        

    </div>
</body>

</html>
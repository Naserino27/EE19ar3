<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Highest score</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="kontainer">
        <h1>Highest Score</h1>
        <?php
        //Läs in all text
        $allText = file_get_contents("highscore.txt");
        echo "<h2>Leaderboards</h>";
        echo "<pre class=\"alert alert-dark\"><p>$allText</p></pre>";

        echo "<h4>Total score</h4>";
        $allaRader = file("highscore.txt");
        $total = 0;
        foreach ($allaRader as $rad){
            $delar = explode(":", $rad);
            $total += $delar[1];
        }

    

        echo "<p>$total</p>";


        // Läs in allt från textfilen
        //file(highscore.txt)
        ?>
    </div>
</body>

</html>
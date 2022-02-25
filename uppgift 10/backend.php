<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>hur varmt är det?</h3>
    <?php
        $temp = filter_input(INPUT_POST, 'temp', FILTER_SANITIZE_STRING);
        $riktning = filter_input(INPUT_POST, 'temp', FILTER_SANITIZE_STRING);

        echo "<p>Temperaturen blir $temp&deg;</p>";

        //Om riktning är c->f 
        if ($riktning == "cf") {
            $farenheit = $temp * 1.8 + 32;
        } else{
            $celsius = ($temp - 32) / 1.8;
            echo "<p>$temp&deg;";
        }
    ?>
</body>
</html>
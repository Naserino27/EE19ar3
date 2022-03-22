<?php
include "konfigdb.php";
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>

        </nav>
        <main>
            <form action="registrera.php" method="POST">
                <div class="row mb-3">
                    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="namn">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="lösenord">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <?php
                //Ta emot data från formuläret
                $namn = filter_input(INPUT_POST, "namn");
                $email = filter_input(INPUT_POST, "email");
                $lösenord = filter_input(INPUT_POST, "lösenord");

                //Testa att det funkar
                //var_dump($namn, $email, $lösenord);

                //Kolla att det inte är null
                if ($namn && $email && $lösenord) {

                    //Kolla att användarnamnet eller email inte används redan
                    $sql = "SELECT * FROM register WHERE namn= '$namn' OR epost= '$email'";    

                    $resultat = $conn->query($sql);

                    // Hittar vi användarnamnet eller email?
                    if ($resultat->num_rows > 0) {
                        echo "<p class=\"alert alert-warning\">Användaren $namn finns redan!</p>";
                    } else {
                        //Räkna fram ett hash till lösenordet
                        $hash = password_hash($lösenord, PASSWORD_DEFAULT);

                        //Lagra i databasen
                        //1. SQL kommando
                        $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$hash')";
                        //echo $sql;
                        //die();

                        //2. kör sql kommandot
                        $resultat = $conn->query($sql);

                        //3. Kontrollera om det funkar
                        if (!$resultat) {
                            die("någonting är fel med SQL-satsen!");
                        } else {
                            echo "<p class=\"alert alert-success\">Användaren $namn har registrerats!</p>";
                        }
                    }
                }
            ?>
        </main>
    </div>
</body>

</html>
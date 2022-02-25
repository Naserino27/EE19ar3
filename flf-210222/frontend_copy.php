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
        <h1>Spara Highscore</h1>
        <form action="backend_copy.php" method="POST">
            <label for="text">text</label>
            <textarea id="text" class="form-control" type="text" name="text" required>  </textarea>
            <label for="namn">Ange namn</label>
            <input id="namn" class="form-control" type="text" name="namn" required>
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
    </div>
</body>

</html>
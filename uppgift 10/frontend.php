<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="kontainer">
        <h3>Hur varmt är det?</h3>
        <form>
            <div class="mb-3">
                <label for="temp" class="form-label">Ange temperatur</label>
                <input type="text" class="form-control" id="temp" name="temp">
            </div>
            <div class="kol2">
                <p>ange rikting</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cf" >
                    <label class="form-check-input" for="cf"></label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="fc">
                    <label class="form-check-input" for="fc"></label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
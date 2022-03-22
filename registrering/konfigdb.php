<?php
// Uppgifter för databasen, användare, lösenord..
$användare = "bloggen_db";
$lösenord = "z3B_(nG)*@nr]tDK";
$databas = "bloggen_db";
$host = "localhost";

// Logga in
$conn = new mysqli($host, $användare, $lösenord, $databas);

// Gick det att ansluta?
if ($conn->connect_error) {
    die("<p class=\"alert alert-warning\">Någonting gick fel</p>");
} else {
    echo "<p class=\"alert alert-success\">Database connection successful</p>";
}

?>
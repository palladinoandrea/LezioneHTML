<?php


//IF (SERVER["REQUEST_METHOD"] == "POST"){}
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];

echo "<h2>Dati ricevuti</h2>";
echo "Nome: ".$nome."<br>";
echo "Cognome: ".$cognome."<br>";
echo "Email: ".$email."<br>";






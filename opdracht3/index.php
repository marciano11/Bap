<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<body>
<?php
$voornaam = 'Gianni';
$leeftijd = 17;
$text = " Hoi ";
$school = "Media College";
$opleiding = "Media developer";

echo $text, $voornaam;

if($leeftijd < 17) {
    echo " Je mag niet afrijden voor je rijbewijs ";
} else {
    echo " Je mag afrijden voor je rijbewijs ";
}
?>
</body>
</html>
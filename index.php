<?php

require_once __DIR__.'/Movie.php';

$ritorno_al_futuro = new Movie("Ritorno al futuro", "Steven Spielberg", 9.5, 1985, "fantasy", "...");
$jurassic_park = new Movie("Jurassic Park", "Steven Spielberg", 9.0, 1993, "fantasy", "...");
$lo_squalo = new Movie("Lo Squalo", "Steven Spielberg", 8.8, 1975, "thriller", "...");

var_dump($ritorno_al_futuro);
var_dump($jurassic_park);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
    <style>
        li {
            padding: 20px 0;
        }
    </style>
</head>
<body>

    <ul>
        <li>
            <?php echo $ritorno_al_futuro->getFullMovie(); ?>
        </li>
        <li>
            <?php echo $jurassic_park->getFullMovie(); ?>
        </li>
        <li>
            <?php echo $lo_squalo->getFullMovie(); ?>
        </li>
    </ul>
    
</body>
</html>
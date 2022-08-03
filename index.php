<?php
require_once 'functions.php';
$connectionString = 'mysql:host=db; dbname=dndraces';
$dbUsername ='root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `races`;';
$query = $db->prepare($queryString);
$query->execute();

$allRaces = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        D&D Races Homepage
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="Homepage to D&D races">
    <meta name="author" content="Joshua Robert Bennet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>
    D&D Races
</h1>
    <nav class="navbar">
        <div class="menu_top">
            <a class="up" href="index.php">^</a>
        </div>
    </nav>
    <img class="party_img" src="images/partyHomeSplash.jpeg" alt="A Dungeons and dragons party">
    <div >
         <?php
         foreach ($allRaces as $race) {
             echo createRaceItem($race);
         }
         ?>
    </div>


    <p class="creator_name">By Joshua Bennet</p>

</body>
</html>

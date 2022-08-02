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

$result = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        D&D Races Homepage
    </title>
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
<header class="home_welcome">
    Welcome to my Dungeons and Dragons races site.
</header>
    <img class="party_img" src="images/partyHomeSplash.jpeg" alt="A Dungeons and dragons party">
    <div class="race_item">
        <?php createRaceItem($result); ?>
    </div>

    <p class="creator_name">By Joshua Bennet</p>

</body>
</html>

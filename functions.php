<?php
require_once 'database/database.php';

$connectionString = 'mysql:host=db; dbname=dndraces';
$dbUsername ='root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `races`;';
$query = $db->prepare($queryString);
$query->execute();

$result = $query->fetchAll();

//echo '<pre>';
//var_dump($result);


function createRaceItem(array $race) {
    foreach ($race as $stage) {

    echo "<div>";
    echo $stage['name'];
    echo "<p></p>";
    echo $stage['description'];
    echo "<p></p>";
    echo $stage['traits'];
    echo "<p></p>";
    echo $stage['variantRaceName'];
    echo "<p></p>";
    echo $stage['variantTraits'];
    echo "<p></p>";
//    echo '<p> </p><img src="images/' . '$stage['picture']> </p>';
    echo "</div>";
    echo '<p class="divider">------------------------------------</p>';
    }
}


//
//    var_dump($result);


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


function createRaceItem(array $result) {
    echo "<div>";
    echo $result['name'];
    echo "<p></p>";
    echo $result['description'];
    echo "<p></p>";
    echo $result['traits'];
    echo "<p></p>";
    echo $result['variantRaceName'];
    echo "<p></p>";
    echo $result['VariantTraits'];
    echo "<p></p>";
    echo "<p>    <img src="images/" . "$result['picture']" >  </p>";
    echo "</div>";


}

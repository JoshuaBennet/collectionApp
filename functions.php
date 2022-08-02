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




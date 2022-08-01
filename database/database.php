<?php
session_start();
$connectionString = 'mysql:host=db; dbname=dndraces';
$dbUsername ='root';
$dbPassword = 'password';
$db = new PDO($connectionString, $dbUsername, $dbPassword);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$queryString = 'SELECT * FROM `dndraces`;';
$query = $db->prepare($queryString);
$query->execute();

$allResults = $query->fetchAll();


echo '<pre>';
var_dump($_SESSION);
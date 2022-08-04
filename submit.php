<?php
require_once('functions.php');
$raceInsert = $_GET;
addRaceToDb($raceInsert);
header('Location: index.php');
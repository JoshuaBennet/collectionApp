<?php
function createRaceItem(array $race): string {
    if (
        !array_key_exists('name', $race) ||
        !array_key_exists('description', $race) ||
        !array_key_exists('age', $race) ||
        !array_key_exists('size', $race) ||
        !array_key_exists('speed', $race) ||
        !array_key_exists('ability', $race) ||
        !array_key_exists('lang', $race) ||
        !array_key_exists('other', $race) ||
        !array_key_exists('otherAdditional', $race) ||
        !array_key_exists('otherAddTwo', $race)
    )
        return '';

        $string_output = "<div class='race_item'>" .

            "<h2 class='title_in_card'>" . $race['name'] . "</h2>" .
            "<p class='text_in_card'>" . $race['description'] . "</p>" .
            "<p class='text_in_card'>" . $race['age'] . "</p>" .
            "<p class='text_in_card'>" . $race['size'] . "</p>" .
            "<p class='text_in_card'>" . $race['speed'] . "</p>" .
            "<p class='text_in_card'>" . $race['ability'] . "</p>" .
            "<p class='text_in_card'>" . $race['lang'] . "</p>" .
            "<p class='text_in_card'>" . $race['other'] . "</p>" .
            "<p class='text_in_card'>" . $race['otherAdditional'] . "</p>" .
            "<p class='text_in_card'>" . $race['otherAddTwo'] . "</p>" .
            "</div>";

        return $string_output;
}

function addRaceToDb($raceInsert){

    $name = $raceInsert['name'];
    $description = $raceInsert['description'];
    $age = $raceInsert['age'];
    $size = $raceInsert['size'];
    $speed = $raceInsert['speed'];
    $ability = $raceInsert['ability'];
    $lang = $raceInsert['lang'];
    $other = $raceInsert['other'];
    $otherAdditional = $raceInsert['otherAdditional'];
    $otherAddTwo = $raceInsert['otherAddTwo'];

    $connectionString = 'mysql:host=db; dbname=dndraces';
    $dbUsername ='root';
    $dbPassword = 'password';
    $db = new PDO($connectionString, $dbUsername, $dbPassword);
    $queryString = 'INSERT INTO `races` (`name`, `description`, `age`, `size`, `speed`, `ability`, `lang`, `other`, `otherAdditional`, `otherAddTwo`)
                    VALUES (:name, :description, :age, :size, :speed, :ability, :lang, :other, :otherAdditional, :otherAddTwo)';
    $query = $db->prepare($queryString);
    $query->execute(['name' => $name, 'description' => $description, 'age' => $age, 'size' => $size, 'speed' => $speed, 'ability' => $ability, 'lang' => $lang, 'other' => $other, 'otherAdditional' => $otherAdditional, 'otherAddTwo' => $otherAddTwo]);
}

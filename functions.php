<?php

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

    $link_var = '';
function createRaceItem(array $race)
{
    foreach ($race as $trait) {

        $string_output = "<div>" .
            $trait['name'] .
            "<p></p>" .
            $trait['description'] .
            "<p></p>" .
            $trait['age'] .
            "<p></p>" .
            $trait['size'] .
            "<p></p>" .
            $trait['speed'] .
            "<p></p>" .
            $trait['ability'] .
            "<p></p>" .
            $trait['lang'] .
            "<p></p>" .
            $trait['other'] .
            "<p></p>" .
            $trait['otherAdditional'] .
            "<p></p>" .
            $trait['otherAddTwo'] .
            "<p></p>" .
            "</div>" .

    }
    $link_var .= $string_output;
}
//$some_var = '';
//foreach (){


//
//            $stage['name'] .
//            "<p></p>" .
//            $stage['description'] .
//            "<p></p>" .
//            $stage['traits'] .
//            "<p></p>" .
//            $stage['variantRaceName'] .
//            "<p></p>" .
//            $stage['variantTraits'] .
//            "<p></p>" .
////     '<p> <img src="images/' . '$stage['picture']> </p>' .
//            "</div>" .
//            '<p class="divider">------------------------------------</p>';
//            $some_var.=$stringOutput;
////    }
//    }
//}


//
//    var_dump($result);


<?php

//$connectionString = 'mysql:host=db; dbname=dndraces';
//$dbUsername ='root';
//$dbPassword = 'password';
//$db = new PDO($connectionString, $dbUsername, $dbPassword);
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//
//$queryString = 'SELECT * FROM `races`;';
//$query = $db->prepare($queryString);
//$query->execute();
//
//$result = $query->fetchAll();
//
////echo '<pre>';
////var_dump($result);
//
//    $link_var = '';

function createRaceItem(array $race) {

//    foreach ($race as $trait) {

//        if() {
//            return '';
//        }

        $string_output = '<div class="race_item">' .

            "<p class='title_in_card'>" . $race['name'] . "</p>" .

            "<p>" . $race['description'] . "</p>" .

            "<p>" . $race['age'] . "</p>" .

            "<p>" . $race['size'] . "</p>" .

            "<p>" . $race['speed'] . "</p>" .

            "<p>" . $race['ability'] . "</p>" .

            "<p>" .  $race['lang'] . "</p>" .

            "<p>" . $race['other'] . "</p>" .

            "<p>" . $race['otherAdditional'] . "</p>" .

            "<p>" . $race['otherAddTwo'] . "</p>" .
            "</div>";

//    }
        return $string_output;
//    $link_var.= $string_output;
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


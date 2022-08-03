<?php

function createRaceItem(array $race) {



        $string_output = '<div class="race_item">' .

            "<h2 class='title_in_card'>" . $race['name'] . "</h2>" .

            "<p class='text_in_card'>" . $race['description'] . "</p>" .

            "<p class='text_in_card'>" . $race['age'] . "</p>" .

            "<p class='text_in_card'>" . $race['size'] . "</p>" .

            "<p class='text_in_card'>" . $race['speed'] . "</p>" .

            "<p class='text_in_card'>" . $race['ability'] . "</p>" .

            "<p class='text_in_card'>" .  $race['lang'] . "</p>" .

            "<p class='text_in_card'>" . $race['other'] . "</p>" .

            "<p class='text_in_card'>" . $race['otherAdditional'] . "</p>" .

            "<p class='text_in_card'>" . $race['otherAddTwo'] . "</p>" .
            "</div>";

        return $string_output;
}



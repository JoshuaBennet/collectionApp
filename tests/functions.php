<?php
require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    function testSuccessDisplayRaces()
    {
        $input =
        [
         'name' => 'Dragonborn',
         'description' => 'The dragonborn walk proudly through a world that greets them with fearful incomprehension. Shaped by the dragons themselves, dragonborn originally hatched from dragon eggs as a unique race, combining the best attributes of dragons and humanoids.',
         'age' => 'Young dragonborn grow quickly. They walk hours after hatching, attain the size and development of a 10-year-old human child by the age of 3, and reach adulthood by 15. They live to be around 80.',
         'size' => 'Dragonborn are taller and heavier than humans, standing well over 6 feet tall and averaging almost 250 pounds. Your size is Medium.',
         'speed' => 'Your base walking speed is 30 feet.',
         'ability' => 'Your Strength score increases by 2, and your Charisma score increases by 1.',
         'lang' => 'Languages. You can read, speak, and write Common and Draconic.',
         'other' => 'Draconic Ancestry: You are distantly related to a particular kind of dragon. Choose a type of dragon from the below list; this determines the damage and area of your breath weapon, and the type of resistance you gain.',
         'otherAdditional' =>'Damage Resistance: You have resistance to the damage type associated with your ancestry.',
         'otherAddTwo' => null

        ];
        $expectedOutput = "<div class='race_item'><h2 class='title_in_card'>Dragonborn</h2><p class='text_in_card'>The dragonborn walk proudly through a world that greets them with fearful incomprehension. Shaped by the dragons themselves, dragonborn originally hatched from dragon eggs as a unique race, combining the best attributes of dragons and humanoids.</p><p class='text_in_card'>Young dragonborn grow quickly. They walk hours after hatching, attain the size and development of a 10-year-old human child by the age of 3, and reach adulthood by 15. They live to be around 80.</p><p class='text_in_card'>Dragonborn are taller and heavier than humans, standing well over 6 feet tall and averaging almost 250 pounds. Your size is Medium.</p><p class='text_in_card'>Your base walking speed is 30 feet.</p><p class='text_in_card'>Your Strength score increases by 2, and your Charisma score increases by 1.</p><p class='text_in_card'>Languages. You can read, speak, and write Common and Draconic.</p><p class='text_in_card'>Draconic Ancestry: You are distantly related to a particular kind of dragon. Choose a type of dragon from the below list; this determines the damage and area of your breath weapon, and the type of resistance you gain.</p><p class='text_in_card'>Damage Resistance: You have resistance to the damage type associated with your ancestry.</p><p class='text_in_card'></p></div>";
        $actualOutput = createRaceItem($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    function testFailureDisplayRaces()
    {
        $input = ['red', 'yellow', 'blue', 'green'];
        $expectedOutput = '';
        $actualOutput= createRaceItem($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

}


?>

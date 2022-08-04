<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        D&D Races Registration Page
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="description" content="Homepage to D&D races">
    <meta name="author" content="Joshua Robert Bennet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>
    D&D New Race Registration
</h1>
<nav class="navbar">
    <div class="menu_top">
        <a class="home" href="index.php">Home</a>
    </div>
</nav>
<div class="new_race_container">
    <form class="new_race" method="get" action="submit.php">

        <label class="labels_for_race" for="name" id="name">Name: </label>
        <input type="text" name="name" alt="input for race name" placeholder="Human" size="40" required>
        <label class="labels_for_race" for="description" id="description">Description: </label>
        <textarea class="textarea_races_info" name="description" alt="input for race description" placeholder="A paragraph about the new race" rows="6" required></textarea>
        <label class="labels_for_race" for="age" id="age">Age: </label>
        <input type="text" name="age" alt="input for race maximum age" placeholder="Maximum age" size="40" required>
        <label class="labels_for_race" for="size" id="size">Size: </label>
        <textarea class="textarea_races_info" name="size" alt="input for race size" placeholder="Description of average size" rows="2" required></textarea>
        <label class="labels_for_race" for="speed" id="speed">Speed: </label>
        <textarea class="textarea_races_info" name="speed" alt="input for race speed" placeholder="Your base walking speed is 30 feet" rows="1" required></textarea>
        <label class="labels_for_race" for="ability" id="ability">Ability increase: </label>
        <textarea class="textarea_races_info" name="ability" alt="input for race ability increases" placeholder="Your strength score increases by..." rows="1" required></textarea>
        <label class="labels_for_race" for="lang" id="lang">Languages known: </label>
        <textarea class="textarea_races_info" type="text" name="lang" alt="input for race languages known" placeholder="Languages: You can read,..." rows="1" required></textarea>
        <label class="labels_for_race" for="other" id="other">Other features: </label>
        <textarea class="textarea_races_info" name="other" alt="input for other features, not required" placeholder="Additional race features" rows="6"></textarea>
        <label class="labels_for_race" for="otherAdditional" id="otherAdditional">Other features: </label>
        <textarea class="textarea_races_info" name="otherAdditional" alt="input for other features, not required" placeholder="Additional race features" rows="6"></textarea>
        <label class="labels_for_race" for="otherAddTwo" id="otherAddTwo">Other features: </label>
        <textarea class="textarea_races_info" name="otherAddTwo" alt="input for other features, not required" placeholder="Additional race features" rows="6"></textarea>

        <p></p>
        <input  type="submit"   value="Submit your new race">
    </form>
</div>
</body>
</html>

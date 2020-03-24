<?php

require_once 'PokemonHydrator.php';
require_once 'PokemonEntity.php';
require_once 'dbConnection.php';

//Grab the data
$db = new DB();
$connection = $db->getConnection();
$pokemonHydrator = new PokemonHydrator($connection);
$allPokemon = $pokemonHydrator->getPokemonEntities();

//display data
function displayPokedex($allPokemon) {
    foreach ($allPokemon as $pokemon) {
        $pokemon->display();
    }
}

?>

<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex!</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="background"></div>
    <h1>Pokedex!</h1>
    <div class="desc-box">
        <p class="app-desc">A pokedex written in OOP using PHP. I used a hydrator class to instantiate each pokemon through a pokemonEntity class and dynamically display from a DB.</p>
    </div>
    <div class="container">
        <div class="surround">
            <?php displayPokedex($allPokemon) ?>
        </div>
    </div>
</body>
</html>


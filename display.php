<?php 




$db = new PDO('mysql:host=db; dbname=cuttlefish', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `points`, `games`,`rings` FROM `nba`");
$query->execute();
$players = $query->fetchAll();

// echo '<pre>';
// var_dump($players);
// echo '</pre>';

/**
 * Takes the data from the database, separates the array into individual players stats and then echos
 * out the information
 *
 * @param array $players
 * @return echos out the details from the player
 */
function displayplayers(array $players){
    $results = '';
    foreach($players as $player){
        echo '<p>Name: ' . $player['name'] . '</p>';
        echo '<p>points:' . $player['points'] . '</p>';
        echo '<p>games: ' . $player['games'] . '</p>';
        echo '<p>rings: ' . $player['rings'] . '</p>';
    } return $results;
}

displayplayers($players);























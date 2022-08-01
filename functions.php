<?php 

//  * Takes the data from the database, separates the array into individual players stats and then echos
//  * out the information
//  *
//  * @param array $players
//  * @return echos out the details from the player
//  */
function displayPlayers(array $players){
    if (count($players) == 0){
        return 'no data';
    } else {
    $result = '';
    foreach($players as $player){
        $result .= '<p>Name: ' . $player['name'] . '</p>';
        $result .= '<p>points: ' . $player['points'] . '</p>';
        $result .= '<p>games: ' . $player['games'] . '</p>';
        $result .= '<p>rings: ' . $player['rings'] . '</p>';
    } 
    return $result;
}
}
<?php 

//  * Takes the data from the database, separates the array into individual players stats and then echos
//  * out the information while checking that the array is populated 
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

//  * This connects the database and set a default attribute mode for it 
//  * 
//  *
//  * @param 
//  * @return returns the database into the $db var
//  */
function connectDatabase(){
    $db = new PDO('mysql:host=db; dbname=cuttlefish', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

//  * This function queries the db and pulls the selected data out to have multiple individual players stats
//  * 
//  *
//  * @param array $db
//  * @return it reutrns the players stats into an assoc array 
//  */
function pullData($db){
$query = $db->prepare("SELECT `name`, `points`, `games`,`rings` FROM `nba`");
$query->execute();
$players = $query->fetchAll();
return $players;
}

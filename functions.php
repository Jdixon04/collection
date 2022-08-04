<?php 

//  * Takes the data from the database, separates the array into individual players stats and then echos
//  * out the information while checking that the array is populated 
//  *
//  * @param array $players
//  * @return echos out the details from the player
//  */
function displayPlayers(array $players)
{
    if (count($players) == 0){
        return 'no data';
    } else {
    $result = '';
    foreach($players as $player){
        $result .= '<div>Name: ' . $player['name'] . '</p>';
        $result .= '<p>points: ' . $player['points'] . '</p>';
        $result .= '<p>games: ' . $player['games'] . '</p>';
        $result .= '<p>rings: ' . $player['rings'] . '</div>';
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
function connectDatabase():PDO
{
    $db = new PDO('mysql:host=db; dbname=cuttlefish', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $db;
}

//  * This function queries the db and pulls the selected data out to have multiple individual players stats
//  * 
//  *
//  * @param array $db
//  * @return it reutrns the players stats into an assoc array 
//  */
function pullData(PDO $db):array
{
    $query = $db->prepare("SELECT `name`, `points`, `games`,`rings` FROM `nba`");
    $query->execute();
    $players = $query->fetchAll();
    return $players;
}




/**
 * This function prepares the stats for entry into the databse by binding them to params and making a connection to the db
 *
 * @param string $name
 * @param int $points
 * @param int $games
 * @param int $rings
 * @param PDO $db
 */
function insertData (string $name,int $points,int $games,int $rings,PDO $db)
{
    $dbInsert = $db->prepare("INSERT INTO `nba` (`name`, `points`, `games`, `rings`) VALUES (:player, :points, :games, :rings)");
    if (strlen($name) <= 30){
        $dbInsert->bindParam(':player', $name);
        $dbInsert->bindParam(':points', $points);
        $dbInsert->bindParam(':games', $games);
        $dbInsert->bindParam(':rings', $rings);
        return $dbInsert->execute();
    } else {
      return false;
    }
}


/**
 * This function checks to see if the varible stat falls within a permitted range
 *
 * @param int $stat
 * @param int $min
 * @param int $max
 * @return $stat this returns the checked value in the varible if it passes
 */
function validiateInfo (int $stat,int $min,int $max):int
{
    if (filter_var($stat, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        header('input.php');
    } else {
        return $stat;
    }
}
<?php 
require_once 'functions.php';

$db = connectDatabase();

$players = pullData($db);

$result = displayPlayers($players);
?>

<html>
    <head></head>
    <body>
        <a href="input.php">want to create a new player? Click here!</a>
        <div> <?echo $result?> </div>
    </body>
</html>





















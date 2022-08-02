<?php 
require_once 'functions.php';

$db = connectDatabase();

$players = pullData($db);

$result = displayPlayers($players);
?>

<html>
    <head></head>
    <body>
        <div> <?echo $result?> </div>
    </body>
</html>





















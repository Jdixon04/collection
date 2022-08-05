<?php 
require_once 'functions.php';

$db = connectDatabase();

$players = pullData($db);

$result = displayPlayers($players);
?>

<html>
    <head>
        <link href="styles.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <h1>NBA Player stats</h1>
        <main class= "mainTable">
            <div class= "individualStats"> <?echo $result?> </div>
        </main>
        <a class= "button" href="input.php">want to create a new player? Click here!</a>
    </body>
</html>
<?php 
require_once 'functions.php';

$db = new PDO('mysql:host=db; dbname=cuttlefish', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `points`, `games`,`rings` FROM `nba`");
$query->execute();
$players = $query->fetchAll();

// echo '<pre>';
// var_dump($players);
// echo '</pre>';

$result = displayPlayers($players);

echo $result;






















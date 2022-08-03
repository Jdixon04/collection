<?php 
require_once 'functions.php';

$db = connectDatabase();

if (isset($_POST['name']) && ($_POST['name'] !== '')){
 $name = $_POST['name']; 
} else {
header('location:  input.php');
}

if (isset($_POST['points']) && ($_POST['points'] !== '')){
  $points = $_POST['points']; 
 } else {
 header('location:  input.php');
 }

 if (isset($_POST['games']) && ($_POST['games'] !== '')){
  $games = $_POST['games']; 
 } else {
 header('location:  input.php');
 }
 
if (isset($_POST['rings']) && ($_POST['rings'] !== '')){
  $rings = $_POST['rings']; 
 } else {
 header('location:  input.php');
 }
 
$dbInsert = $db->prepare("INSERT INTO `nba` (`name`, `points`, `games`, `rings`) VALUES (:player, :points, :games, :rings)");

if (strlen($name <= 30)){
  $dbInsert->bindParam(':player', $name);
} else {
    header('input.php');
}

$pMin = 1;
$pMax = 50000;
if (filter_var($points, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$pMin, "max_range"=>$pMax))) === false) {
  header('input.php');
  } else {
    $dbInsert->bindParam(':points', $points);
}

  $gMin = 1;
  $gMax = 5000;
if (filter_var($games, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$gMin, "max_range"=>$gMax))) === false) {
  header('input.php');
  } else {
  $dbInsert->bindParam(':games', $games);
}

  $rMin = 1;
  $rMax = 12;
if (filter_var($rings, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$rMin, "max_range"=>$rMax))) === false) {
    header('input.php');
  } else {
    $dbInsert->bindParam(':rings', $rings);
}

$dbInsert->execute();

header('location: display.php');

?>


<?php 
require_once 'functions.php';

$db = connectDatabase();
const min = 1;
const pMax = 50000;
const gMax = 5000;
const rMax = 12;

if (
  empty($_POST['name']) &&
  empty($_POST['points']) &&
  empty($_POST['games']) &&
  empty($_POST['rings']))
{
  header('location: input.php');
} else {
  $name = $_POST['name']; 
  $points = $_POST['points']; 
  $games = $_POST['games'];
  $rings = $_POST['rings']; 
  $points = validiateInfo($points,min,pMax);
  $games = validiateInfo($games,min,gMax);
  $rings = validiateInfo($rings,min,rMax);
}

if (insertData($name,$points,$games,$rings,$db) == 1){
  header ('location: display.php');
} else {
  header ('location: input.php');
}
  
?>


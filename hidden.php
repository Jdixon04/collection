<?php 
require_once 'functions.php';

$db = connectDatabase();
$pMin = 1;
$pMax = 50000;
$gMin = 1;
$gMax = 5000;
$rMin = 1;
$rMax = 12;

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
  $points = validiateInfo($points,$pMin,$pMax);
  $games = validiateInfo($games,$gMin,$gMax);
  $rings = validiateInfo($rings,$rMin,$rMax);
}

if (insertData($name,$points,$games,$rings,$db) == 1){
  header ('location: display.php');
} else {
  header ('location: input.php');
}
  
?>


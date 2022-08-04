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
  $points = validiateInfo($_POST['points'],min,pMax);
  $games = validiateInfo($_POST['games'],min,gMax);
  $rings = validiateInfo($_POST['rings'],min,rMax);
}

if (insertData($name,$points,$games,$rings,$db)){
  header ('location: display.php');
} else {
  header ('location: input.php');
}
  
?>


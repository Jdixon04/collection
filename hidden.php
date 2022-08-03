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
  isset($_POST['name']) && ($_POST['name'] !== '') &&
  isset($_POST['points']) && ($_POST['points'] !== '') &&
  isset($_POST['games']) && ($_POST['games'] !== '') &&
  isset($_POST['rings']) && ($_POST['rings'] !== ''))
{
 $name = $_POST['name']; 
 $points = $_POST['points']; 
 $games = $_POST['games'];
 $rings = $_POST['rings']; 
} else {
header('location:  input.php');
}

insertData($name,$points,$games,$rings,$db);

$points = validiateInfo($points,$pMin,$pMax);
$games = validiateInfo($games,$gMin,$gMax);
$rings = validiateInfo($rings,$rMin,$rMax);
?>


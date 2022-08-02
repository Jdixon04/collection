<?php 



// use an isset for each of the post 
$name = $_POST['name']; 
$points = $_POST['points'];

$games = $_POST['games'];
$rings = $_POST['rings'];

$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO nba (name, points, games, rings) VALUES ($name, $points, $games, $rings");

if (strlen($name <= 30)){
    $my_Insert_Statement->bindParam(':name', $name);
} else {
    header('input.php');
}
 
$pMin = 1;
$pMax = 50000;
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
  } else {
    echo("Variable value is within the legal range");
  }

  $gMin = 1;
  $gMax = 5000;
  if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
  } else {
    echo("Variable value is within the legal range");
  }

  $rMin = 1;
  $rMax = 12;
  if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
  } else {
    echo("Variable value is within the legal range");
  }

$my_Insert_Statement->bindParam(':name', $name);
$my_Insert_Statement->bindParam(':points', $points);
$my_Insert_Statement->bindParam(':games', $games);
$my_Insert_Statement->bindParam(':rings', $rings);



?>

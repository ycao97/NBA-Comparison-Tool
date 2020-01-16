<?php

require_once "config.php";

if(isset($_POST['player']) && isset($_POST['team'])){

 $player = $_POST['player'];
 $team = $_POST['team'];

 $query = "SELECT year FROM season_stat WHERE player ='".$player."' AND tm = '".$team."'";
 $result = mysqli_query($con,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("year"=>$row['year']);
 }

 echo json_encode($response);
}

exit;

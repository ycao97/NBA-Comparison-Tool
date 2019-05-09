<?php

require_once "config.php";

if(isset($_POST['search'])){

 $search = $_POST['search'];

 $query = "SELECT id, player, tm FROM season_stat WHERE player like'%".$search."%' LIMIT 20";
 $result = mysqli_query($con,$query);

 $response = array();
 while($row = mysqli_fetch_array($result) ){
   $response[] = array("value"=>$row['tm'],"label"=>$row['player']);
 }

 echo json_encode($response);
}
$con->close();

exit;

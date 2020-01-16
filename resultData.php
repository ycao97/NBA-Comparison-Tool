<?php

require_once "config.php";

if(isset($_POST['action']) && $_POST['action'] =="getResult"){

 $player = $_POST['player'];
 $playerId = $_POST['playerId'];
 $year = $_POST['year'];
 $output = '';

 $playerArray = array();
 $yearArray = array();
 $query = "";

 for($i=0; $i<sizeof($year); $i++){
   if(!empty($player[$i])){
     if(!empty($query)){
        $query .= " UNION ";
     }
     $query .= "(SELECT * FROM season_stat WHERE Player = '".$playerId[$i]."' AND Year = ".$year[$i]." LIMIT 1)";
   }
 }
//echo $query;
 $result = mysqli_query($con,$query);

  $rowcount=mysqli_num_rows($result);

  $colSize = 12 / $rowcount;
 if( $rowcount > 0){

   while($row = mysqli_fetch_array($result) ){

     $output .= '<div class="playerResult">
         <div class="Title">
             <h3>'.$row["Player"].'</h3>
             <span>'.$row["Year"].'&nbsp;</span>
             <p><strong>Age</strong>: <span>'.$row["Age"].'&nbsp;</span></p>
         </div>
         <div class="player_content">
          <p>Pos:<span>'.$row["Pos"].'&nbsp;</span></p>
          <p>Tm:<span>'.$row["Tm"].'&nbsp;</span></p>
          <p>G:<span>'.$row["G"].'&nbsp;</span></p>
          <p>GS:<span>'.$row["GS"].'&nbsp;</span></p>
          <p>MP:<span>'.$row["MP"].'&nbsp;</span></p>
          <p>PER:<span>'.$row["PER"].'&nbsp;</span></p>
          <p>TS%:<span>'.$row["TS%"].'&nbsp;</span></p>
          <p>3PAr:<span>'.$row["3PAr"].'&nbsp;</span></p>
          <p>FTr:<span>'.$row["FTr"].'&nbsp;</span></p>
          <p>ORB%:<span>'.$row["ORB%"].'&nbsp;</span></p>
          <p>DRB%:<span>'.$row["DRB%"].'&nbsp;</span></p>
          <p>TRB%:<span>'.$row["TRB%"].'&nbsp;</span></p>
          <p>AST%:<span>'.$row["AST%"].'&nbsp;</span></p>
          <p>STL%:<span>'.$row["STL%"].'&nbsp;</span></p>
          <p>BLK%:<span>'.$row["BLK%"].'&nbsp;</span></p>
          <p>TOV%:<span>'.$row["TOV%"].'&nbsp;</span></p>
          <p>USG%:<span>'.$row["USG%"].'&nbsp;</span></p>
          <p>OWS:<span>'.$row["OWS"].'&nbsp;</span></p>
          <p>DWS:<span>'.$row["DWS"].'&nbsp;</span></p>
          <p>WS:<span>'.$row["WS"].'&nbsp;</span></p>
          <p>WS48:<span>'.$row["WS48"].'&nbsp;</span></p>
          <p>OBPM:<span>'.$row["OBPM"].'&nbsp;</span></p>
          <p>DBPM:<span>'.$row["DBPM"].'&nbsp;</span></p>
          <p>BPM:<span>'.$row["BPM"].'&nbsp;</span></p>
          <p>VORP:<span>'.$row["VORP"].'&nbsp;</span></p>
          <p>FG:<span>'.$row["FG"].'&nbsp;</span></p>
          <p>FGA:<span>'.$row["FGA"].'&nbsp;</span></p>
          <p>FG%:<span>'.$row["FG%"].'&nbsp;</span></p>
          <p>3P:<span>'.$row["3P"].'&nbsp;</span></p>
          <p>3PA:<span>'.$row["3PA"].'&nbsp;</span></p>
          <p>3P%:<span>'.$row["3P%"].'&nbsp;</span></p>
          <p>2P:<span>'.$row["2P"].'&nbsp;</span></p>
          <p>2PA:<span>'.$row["2PA"].'&nbsp;</span></p>
          <p>2P%:<span>'.$row["2P%"].'&nbsp;</span></p>
          <p>eFG%:<span>'.$row["eFG%"].'&nbsp;</span></p>
          <p>FT:<span>'.$row["FT"].'&nbsp;</span></p>
          <p>FTA:<span>'.$row["FTA"].'&nbsp;</span></p>
          <p>FT%:<span>'.$row["FT%"].'&nbsp;</span></p>
          <p>ORB:<span>'.$row["ORB"].'&nbsp;</span></p>
          <p>DRB:<span>'.$row["DRB"].'&nbsp;</span></p>
          <p>TRB:<span>'.$row["TRB"].'&nbsp;</span></p>
          <p>AST:<span>'.$row["AST"].'&nbsp;</span></p>
          <p>STL:<span>'.$row["STL"].'&nbsp;</span></p>
          <p>BLK:<span>'.$row["BLK"].'&nbsp;</span></p>
          <p>TOV:<span>'.$row["TOV"].'&nbsp;</span></p>
          <p>PF:<span>'.$row["PF"].'&nbsp;</span></p>
          <p>PTS:<span>'.$row["PTS"].'&nbsp;</span></p>
         </div>
     </div>';

   }

 }else{

   $output .= "<h2>Whoops. No Data Found!!!</h2>";

 }

 $output .= '';
 echo $output;
}

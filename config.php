<?php
define("HOST", "localhost");
define("DB_NAME", "nba_players");
define("DB_USER", "root");
define("DB_PASSWORD", "yy111297");


//connect mysql
$con = mysqli_connect(HOST,DB_USER,DB_PASSWORD) or die('Unable to connect server: ' . mysql_error());



//select database
mysqli_select_db($con, DB_NAME) or die ('Unable to select database!');
<?php
if (($_SERVER['REMOTE_ADDR']!='181.72.11.104')&&($_SERVER['REMOTE_ADDR']!='190.47.70.117')){exit();}
require_once('../db.php') ;

n623ad0b9();
echo "<div id='search' style='height:130px'>";
include("search.php");
echo "</div>";
echo "<div>";
include("home.php");
echo "</div>";

?>

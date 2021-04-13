<?php
include("header.php"); 

  $h = $_POST["height"];
  $w = $_POST["weight"];
  $BMI = $w / $h**2;
  echo  "身高:" . $h . "公分<br>";
  echo  "體重:" . $w . "公斤<br>";
  echo  "BMI:" . $BMI . "<br>";
  if ( $BMI < 18.5) {
  echo"太輕了!<br>";
 }else if($BMI > 24) {
 	 echo"有點超重囉~~<br>";
 	}
include("footer.php");
 ?>

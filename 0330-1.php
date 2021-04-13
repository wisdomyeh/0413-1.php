<html>
<head></head>
<body>
<?php include("header.php"); ?>
<center>
	<h2>BMI線上計算服務</h2>
<form action="0330-1.php" method="post">
身高: <input type="text" name="height">公尺<br>
體重: <input type="text" name="weight">公斤<br>
<input type="submit">
</form>
<?php
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

 ?>
</center>
<?php include("footer.php"); ?>
</body>
</html>
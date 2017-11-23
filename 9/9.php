<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body>
<title>COOKIE INFORMATION</title>
</head>
<body bgcolor=lightblue>
<div style="background-color:red;"><b><p align="center">COOKIE INFORMATION</p></div>
<?php
date_default_timezone_set('Asia/Calcutta');
$lvisit=60*60*60*24+time();
setcookie("lcook",date("G:h:i:s-m/d/y"),$lvisit);
if(isset($_COOKIE['lcook']))
{
$cvalue=$_COOKIE['lcook'];
echo "<h1 align='center'>YOU VISITED THIS PAGE LAST ON </h1><br/><br/><br/>";
echo "<table border='10px' align='center' bgcolor='yellow'><th>";
echo $cvalue;
echo "</th></table>";
}
else
echo "you visited for first time";
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="background-color:grey;"><b><p align="center">CopyRight @</p></div>
</form>
</body>
</html>

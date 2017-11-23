<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<body>
<title>SESSION PROGRAM</title>
</head>
<body bgcolor=lightblue>
<div style="background-color:red;"><b><p align="center">SESSION PROGRAM</p></div>
<?php
if(isset($_SESSION['Views']))
{
$sview=$_SESSION['Views']+1;
echo "You visited".$sview."times";
}
else
{
echo "You visited ".$_SESSION['Views']."times";
}
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="background-color:grey;"><b><p align="center">CopyRight @</p></div>
</form>
</body>
</html>

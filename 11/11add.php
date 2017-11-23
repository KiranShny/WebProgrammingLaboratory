<?php
$con=mysqli_connect("localhost","root","","lab11") or die("error");
if(isset($_POST['sub']))
{
$n1=$_POST['sname'];
$a1=$_POST['ad1'];
$a2=$_POST['ad2'];
$e1=$_POST['email1'];
$qstr="INSERT INTO info VALUES('$n1','$a1','$a2','$e1')";
mysqli_query($con,$qstr); 
echo "<script type='text/javascript'>";
echo "alert('INSERTED SUCCESSFULLY');";
echo "window.location.href='11add.php'";
echo "</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DATABASE PHP</title>
</head>
<body bgcolor=black>
<div style="background-color:red;"><b><p align="center">DIGITAL ADDRESS BOOK</p></div>
<p><a href="11home.php"><img src="index.jpg" alt=" " width="70" height="70"></a></p>
<form name="a1" action="" method="POST">
<table align="center"bgcolor=white><tr><td><h3>Enter the Details<h3></td></tr>
<tr><td>Name:</td><td><input type="text" name="sname" value="" required/></td></tr>
<tr><td>Address Line 1:</td><td><input type="text" name="ad1" value="" required/></td></tr>
<tr><td>Address Line 2:</td><td><input type="text" name="ad2" value="" required/></td></tr>
<tr><td>E-mail:</td><td><input type="email" name="email1" value="" required/></td></tr></table>
<input style="margin-left:700px;"type="submit" name="sub" value="SUBMIT"/>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="background-color:grey;"><b><p align="center">CopyRight @</p></div>
</body>
</html>

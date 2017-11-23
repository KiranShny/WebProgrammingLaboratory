<?php
$con=mysqli_connect("localhost","root","","lab11") or die("error");
?>
<! DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>DATABASE PHP</title>
</head>
<body bgcolor=gray>
<div style="background-color:red;"><b><p align="center">DIGITAL ADDRESS BOOK</p></div>
<p><a href="11home.php"><img src="index.jpg" alt=" " width="70" height="70"></a></p>
<?php
if(isset($_POST['search']))
{
$n1=$_POST['search'];
$str="select * from info where name like'%$n1%'";
$run=mysqli_query($con,$str) or die(mysqli_error());
$nu=mysqli_num_rows($run);
if($nu>0)
{
}
else
{
echo "<script type='text/javascript'>";
echo "alert('ENTRY NOT FOUND');";
echo "window.location.href='11search.php'";
echo "</script>";
}
while($row=mysqli_fetch_array($run))
{
?>
<table align="center"bgcolor=white><tr><td><h3>Details are <h3></td></tr>
<tr><td>Name:</td><td><input type="text" name="sname" value="<?php echo $row['name']; ?>" readonly="readonly"/></td></tr>
<tr><td>Address Line 1:</td><td><input type="text" name="ad1" value="<?php echo $row['add1']; ?>" readonly="readonly"/></td></tr>
<tr><td>Address Line 2:</td><td><input type="text" name="ad2" value="<?php echo $row['add2']; ?>" readonly="readonly"/></td></tr>
<tr><td>E-mail:</td><td><input type="email" name="email1" value="<?php echo $row['email']; ?>" readonly="readonly"/></td></tr></table>
<?php
}
}
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="background-color:yellow;"><b><p align="center">CopyRight @</p></div>
</body>
</html>

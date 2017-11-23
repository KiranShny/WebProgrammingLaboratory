#!/usr/bin/perl
use CGI ':standard';
print "Content-type: text/html \n\n";
print "<body bgcolor=lightblue>";
print "<div style='background-color:lightgreen;'><b><p align='center'>DATABASE VALUES</p></div>";;
$name=param("sname");
$age=param("age");
use DBI;
$dbh=DBI->connect("DBI:mysql:lab11","root");
$sql="insert into lab8 values('$name',$age)";
$sth=$dbh->prepare("$sql");
$sth->execute();
print "<script type='text/javascript'>";
print "alert('INSERTED SUCCESSFULLY');";
print "</script>";
$qr=$dbh->prepare("select *from lab8");
$qr->execute();
print "<table border='1' align='center'><tr><th>Name</th><th>Age</th></tr>"; 
while(($name,$age)=$qr->fetchrow())
{
	print "<tr><th>$name</th><th>$age</th></tr>";
}
$qr->finish();
$dbh->disconnect();
print "</table>";
print "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
print "<div style='background-color:yellow;'><b><p align='center'>copyright@ </p></div>";

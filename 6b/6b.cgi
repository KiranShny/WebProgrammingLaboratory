#!"C:\xampp\perl\bin\perl.exe"
use CGI ':standard';
print "Content-type: text/html \n\n";
print "<body bgcolor=orange>";
print "<div style='background-color:lightgreen';><h3 align='center'>NUMBER OF VISITOR</h3></div>";
open(FILE,'<lab6a.txt');
$ct=<FILE>;
close(FILE);
$ct++;
open(FILE,'>lab6a.txt');
print FILE "$ct";
print "<br/><br/><br/><br/><br/><br/><br/>";
print "<table border='1' align='center' bgcolor=white><tr><th>NUMBER OF VISITOR VISITED THE PAGE</th></tr><tr><th><h1>$ct</h1></th></tr></table>";
close(FILE);
print "<input type='submit' name='aa' value='reload' onclick='window.location.reload()'/>";
print "<br/><br/><br/><br/><br/><br/><br/>";
print "<div style='background-color:lightgreen;'><b><p align='center'>CopyRight @Kiran</p></div>";

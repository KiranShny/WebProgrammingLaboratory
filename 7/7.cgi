#!/usr/bin/perl
print "Refresh:1\n";
use CGI ':standard';
print "Content-type: text/html \n\n";
print "<body bgcolor=lightgreen>";
($s,$m,$h)=localtime(time);
print "<h3 align='center'>DIGITAL CLOCK</h3>";
print "<table border='5px' align='center' style='background-color:pink'>";
print "<tr><td style='font-size:20px'><b style='color:red;font-size:50px;'>HH</td></b>";
print "<td style='font-size:20px'><b style='color:blue;font-size:50px;'>MM</td></b>";
print "<td style='font-size:20px'><b style='color:green;font-size:50px;'>SS</td></tr>";
print "<td><b style='color:red;font-size:50px;'>$h</b></td><td><b style='color:blue;font-size:50px;'>$m</b></td><td><b style='color:green;font-size:50px;'>$s</b></td>";
print "</table>";
print "<div style='background-color:yellow;'><b><p align='center'>copyright@ </p></div>";

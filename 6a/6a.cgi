#!"C:\xampp\perl\bin\perl.exe"
use CGI':standard';
print "Content-type:text/html \n\n";
print "<body bgcolor='#aed6f1'>"; 
print "<div style=' height:50px; color:white; font-size:38px; text-align:center; background-color:#1a5276; font-style:italic; '> here is your message...</div>";
$pname=param("name");
@arr=("have a nice day","have a wonderful day","you have a bright future","lucky,to get this message");
$i=int rand @arr;
print "<br/><br/><br/><br/><br/><br/><br/><br/>";
print "<center>";
print "<div style=' height:100px; width:250px; font-style:italic;  background-color:#d1f2eb; color:#283747;'>";
print "<b>Hi $pname...<br/><br/> ",@arr[$i],"<b>";
print "</div>";
print "</center>";
print "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
print "<div style=' height:50px; color:white; font-size:38px; text-align:center; background-color:#1a5276; font-style:italic; '>&copy me</div>";
print "</body>";

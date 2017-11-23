<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match="/">
<span style="color:blue;font-size:50px;">USN:</span>
<span style="color:black;font-size:25px;"> <xsl:value-of select="Student/S1/usn"/><br/><br/></span>
<span style="color:red;font-size:50px;">Name:</span>
<span style="color:black;font-size:25px;"> <xsl:value-of select="Student/S1/name"/><br/><br/></span>
<span style="color:green;font-size:50px;">College:</span>
<span style="color:black;font-size:25px;"> <xsl:value-of select="Student/S1/college"/><br/><br/></span>
<span style="color:black;font-size:50px;">Branch:</span>
<span style="color:black;font-size:25px;"> <xsl:value-of select="Student/S1/branch"/><br/><br/></span>
<span style="color:brown;font-size:50px;">EMAIL:</span>
<span style="color:black;font-size:25px;"> <xsl:value-of select="Student/S1/email"/><br/><br/><br/></span>
<span style="color:red;font-size:60px; margin-left:200px; background:yellow;">Copyright @NIKHIL</span>
</xsl:template>
</xsl:stylesheet> 

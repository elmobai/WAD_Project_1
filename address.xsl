<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
		<xsl:template match="*">
		<xsl:applytemplates/>
	</xsl:template>
	<xsl:template match="text()">
		<xsl:applytemplates/>
	</xsl:template>
	<xsl:template match="/">
		<html>
			<head>
				<title>Address Book</title>
			</head>
			<body>
				<h2>My CD Collection</h2>
    				<table border="1">
      					<tr bgcolor="cornflowerblue">
        					<th style="text-align:left">Name</th>
        					<th style="text-align:left">Address</th>
        					<th style="text-align:left">Telephone</th>
      					</tr>
      					<xsl:for-each select="directory/person">
      					<tr>
        					<td bgcolor="aliceblue"><xsl:value-of select="name"/></td>
        					<td bgcolor="aliceblue"><xsl:value-of select="address"/></td>
        					<td bgcolor="aliceblue"><xsl:value-of select="telephone"/></td>
      					</tr>
      					</xsl:for-each>
    				</table>
				<!--1. First Names-->
				<h2>All First Names:</h2>
				<xsl:apply-templates select="/directory/person/name/first_name"/>
				
				<!--2. Last Names-->
				<h2>All Last Name:</h2>
				<xsl:apply-templates select="/directory/person/name/last_name"/>
				
				<!--3. Full Name-->
				<h2>Full Name:</h2>
				<xsl:apply-templates select="/directory/person/name"/>
				
				<!--4. Full Address-->
				<h2>Full Address:</h2>
				<xsl:apply-templates select="/directory/person/address"/>
				
				<!--5. Telephone -->
				<h2>Telephone No:</h2>
				<xsl:apply-templates select="/directory/person/telephone"/>
			</body>
		</html>
	</xsl:template>
	
	<!--1. First Names-->
	<xsl:template match="first_name">
		<p><u><xsl:value-of select="."/></u></p>
	</xsl:template>
	<!--2. Last Names-->
	<xsl:template match="last_name">
		<p><u><xsl:value-of select="."/></u></p>
	</xsl:template>
	
	<!--3. Full Name-->
	<xsl:template match="name">
		<p><u><xsl:value-of select="."/></u></p>
	</xsl:template>
	
	<!--4. Address-->
	<xsl:template match="address">
		<p><u><xsl:value-of select="."/></u></p>
	</xsl:template>
	
	<!--5. Telephone-->
	<xsl:template match="telephone">
		<p><u><xsl:value-of select="."/></u></p>
	</xsl:template>
</xsl:stylesheet>
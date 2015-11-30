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
      					<tr bgcolor="#9acd32">
        					<th style="text-align:left">Name</th>
        					<th style="text-align:left">Address</th>
        					<th style="text-align:left">Telephone</th>
      					</tr>
      					<xsl:for-each select="directory/person">
      					<tr>
        					<td><xsl:value-of select="name"/></td>
        					<td><xsl:value-of select="address"/></td>
        					<td><xsl:value-of select="telephone"/></td>
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
				
				<!--5. address_one-->
				<h2>First line of Address:</h2>
				<xsl:apply-templates select="/directory/person/address/address_one"/>
				
				<!--6. address_two-->
				<h2>Second line of Address:</h2>
				<xsl:apply-templates select="/directory/person/address/address_two"/>
				
				<!--7. address_three-->
				<h2>Third line of Address:</h2>
				<xsl:apply-templates select="/directory/person/address/address_three"/>
				
				<!--8. Telephone -->
				<h2>Telephone No:</h2>
				<xsl:apply-templates select="/directory/person/telephone"/>
			</body>
		</html>
	</xsl:template>
	
	<!--1. First Names-->
	<xsl:template match="first_name">
		<xsl:value-of select="."/>
	</xsl:template>
	<!--2. Last Names-->
	<xsl:template match="last_name">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--3. Full Name-->
	<xsl:template match="name">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--4. Address-->
	<xsl:template match="address">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--5. address_one-->
	<xsl:template match="address_one">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--6. address_two-->
	<xsl:template match="address_two">
		<xsl:value-of select="."/>
	</xsl:template>
		
	<!--7. address_three-->
	<xsl:template match="address_three">
		<xsl:value-of select="."/>
	</xsl:template>
	
	<!--8. Telephone-->
	<xsl:template match="telephone">
		<xsl:value-of select="."/>
	</xsl:template>
</xsl:stylesheet>
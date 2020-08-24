<html>
<head>
<title> Sto. Nino </title>
<body>
<link rel="stylesheet" href="style13.css" type="text/css">
<form method=POST action=studrec.php>
</body>
</head>

<div id="topnav">
	<img src="logo.png" id="logo1">
	<font id="blah" face="Candara Light" size="6" color="white"><b>STO. NINO THE SHEPHERED SCHOOL, INC.</b></font>
	<font id="blah1" face="Candara Light" size="5" color="white"><b>>> School Management</b></font>

</div>
	
<div id="sidenav">
	<table id="side">
	<tr>
	<th><a href="home.php" id=log1><font face="Arial Unicode MS" size="2" color="white"> HOME</font> </a>
	<th><a href="home.php" id=log2><font face="Arial Unicode MS" size="2" color="white"> LOGOUT</font> </a>
	</th>
</th>
</tr>
	<tr> 
	<td><a href="studrec.php" id=log3><font face="Arial Unicode MS" size="2" color="black"> 
	PERSONAL INFORMATION</font></a>
</td>
</tr>
	<tr>
	<td>
	<a href="viewgrade.php" id=log4><font face="Arial Unicode MS" size="2" color="black"> 
	ACADEMIC PERFORMANCE </font> </a>
</td>
</tr>
</table>
</div>
<div id="main">
<center><p id="ebas"><b>Student Personal Information</b> </p></center>
<div id="info1">
<?php
include ('sfetch.php');
?>
<table id="info">
	<tr>
		<th><p id="p"> Student ID </p>
		<th><p id="p"> Grade </p>
		<th><p id="p"> Section </p>
</tr>
<tr>
	<td><p id="p"><?php echo $id ?></td></p>
	<td><p id="p"><?php echo $grade ?></td></p>
	<td><p id="p"><?php echo $sec ?></p>
</td>
</tr>
<tr>
	<th><p id="p">First Name </th>
	<th><p id="p"> Middle Name</th> 
	<th> <p id="p">Last Name</th>
	
</tr>

<tr>
	<td><p id="p"><?php echo $fn ?></td>
	<td><p id="p"><?php echo $mn ?></td>
	<td><p id="p"><?php echo $ln ?></td>
</tr>

<tr>
	<th><p id="p">Gender: </th>
	<th><p id="p"> Religion: </th>
	<th><p id="p"> Nationality:</th>
	
</tr>
<tr>
	<td><p id="p"><?php echo $gen ?></td>
	<td><p id="p"><?php echo $rel ?></td>
	<td><p id="p"><?php echo $cs ?></td>
</tr>
<tr>
	<th><p id="p"> Date of Birth:</th>
	<th> <p id="p">Place of Bitrh: </th>
	</tr>
<tr>
	<td><p id="p"><?php echo $dob ?></td>
	<td><p id="p"><?php echo $pob ?></td>
</tr>
<tr>
	<th><p id="p"> Father's Name: </th>
	<th><p id="p">Mother's Name: </th>
	<th> <p id="p">Contact Number: </th>
	
</tr>
<tr>
	<td><p id="p"><?php echo $fan ?></td>
	<td><p id="p"><?php echo $mon ?></td>
	<td><p id="p"><?php echo $tel ?></td>
</tr>
</table>
</div>



</html>

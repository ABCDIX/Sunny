<html>
<head>
<title> Sto. Nino </title>
<body>
<link rel="stylesheet" href="style6.css" type="text/css">
<form method=POST action=sview.php>

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
	<td><a href="adrec.php" id=log3><font face="Arial Unicode MS" size="2" color="black"> 
	ADD STUDENT RECORDS</font></a>
</td>
</tr>
<tr> 
	<td><a href="adrec.php" id=log5><font face="Arial Unicode MS" size="2" color="black"> 
	ADD STUDENT</font></a>
</td>
	<tr>
	<td>
	<a href="sview.php" id=log4><font face="Arial Unicode MS" size="2" color="black"> 
	VIEW LIST OF STUDENTS </font> </a>
</td>
</tr>
</table>
</div>


<div id="main">
	<center><p id="ebas"><b>SELECT GRADE AND SECTION</b> </p></center>
</div>

<div id="info3">
		<?php
include ('alist.php');
?>
	<table id="choice">
<tr>
	<td><b>Section:</b> </td>
	<td>
	 <select name="sec">
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>

</tr>
<tr>
	<td><b>Grade:</b> </td>
	<td><select name="level" >
    <option>1</option>
    <option>2</option>
    <option>3</option>
	<option>4</option>
    <option>5</option>
    <option>6</option>
  </select>

</tr>

<tr>
<tr>
	<td width="100">
	<td><input name="submit" type="submit"></td>
	</td>
	</tr>
</table>
</div>

</html>
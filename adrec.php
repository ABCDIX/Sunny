<html>
<head>
<title> Sto. Nino </title>
<body>
<link rel="stylesheet" href="style6.css" type="text/css">
<form method=POST action=addrec.php>
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
	<td><a href="adrec.php" id=log3><font face="Arial Unicode MS" size="2" color="black"> 
	ADD STUDENT</font></a>
</td>
</tr>
<tr> 
	<td><a href="addstud.php" id=log4><font face="Arial Unicode MS" size="2" color="black"> 
	ADD STUDENT</font></a>
</td>
</tr>
	<tr>
	<td>
	<a href="sview.php" id=log5><font face="Arial Unicode MS" size="2" color="black"> 
	VIEW LIST OF STUDENTS </font> </a>
</td>
</tr>
</table>
</div>


<div id="main">
	<center><p id="ebas"><b>REGISTRATION FORM</b> </p></center>
</div>

<div id="info2">
	<?php
include ('addrec.php');
?>

<table id=form1>
	<tr><td><center><font face="Calibri Light" size="5" color="black"><b>STUDENT INFO</b></font></center>
		<br></td>
	<tr>
	 	<td> Student NO.: <input type="text" name="user"></td>
	 	<td> Password: <input type="text" name="pass">
	 	<td> New/old:
	 		<input name="stat" type="radio" value="new">New
	 		<input name="stat" type="radio" value="old">Old</td>
	 </tr>

	 <tr>
	 	<td> First Name: <input type="text"	name="fname"></td>
	 	<td> Middle Name: <input type="text" name="mname"></td>
	 	<td> Last Name: <input type="text" name="lname"></td>
	 </tr>

	 <tr>
	 	<td> Grade: <select name="level">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
		<option>4</option>
    	<option>5</option>
    	<option>6</option>
  		</select>

		Section: <select name="sec">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
  		</select>
  		<td> Age: <input type="text" name="age"></td>
	</tr>

	<tr>
		<td> Gender:
			<input name="gen" type="radio" value="Male">Male
			<input name="gen" type="radio" value="Female">Female</td>
		<td> Religion: <input type="text" name="rel"></td>
		<td> Citizenship: <input type="text" name="citi"></td>
	</tr>

	<tr>
		<td> Date of Birth: <input type="text" name="dob"></td>
		<td> Place of Birth: <input type="text" name="pob"></td>
	</tr>

	<tr>
		<td> Father's Name: <input type="text" name="fn"></td>
		<td> Mother's Name: <input type="text" name="mn"></td>
	</tr>

	<tr>
	<td><center><font face="Calibri Light" size="5" color="black"><br><b>CONTACT INFO</b></font></center>
	<tr>
	<td>Home Address: <input type="text" name="padd"></td>
	<td>Guardian Name: <input type="text" name="gn"></td>
	<td>Tel. NO.: <input type="text" name="tel">
		<tr>
	<td><input name="submit" type="submit"></td>
</table>
</div>
</html>
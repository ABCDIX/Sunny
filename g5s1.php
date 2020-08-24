<html>
<head>
<title> Sto. Nino </title>
<body>
<link rel="stylesheet" href="style13.css" type="text/css">
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
	ADD STUDENT</font></a>
</td>
</tr>
	<tr>
	<td>
	<a href="sview.php" id=log4><font face="Arial Unicode MS" size="2" color="black"> 
	VIEW LIST OF STUDENTS </font> </a>
</td>
</tr>
</table>
</div>


<div id="main">
	<center><p id="ebas"><b>STUDENT LIST AND INFORMATION</b> </p></center>
</div>
	<div id="info4">
		<table id="alist" border=1>
			<?php

		require('dbconfig.php');	
		$sql = "SELECT * FROM thegang where level = 5 && sec = 1";
		$result = $conn->query($sql);

		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
		$stat = $row['stat'];
		$fname = $row['fname'];
		$mname = $row['mname'];
		$sname = $row['sname'];

		$level = $row['level'];
		$sec= $row['sec'];
		
			}
		}else{
		echo "0 results";
		}
		$conn->close();
?>
			<tr>
				<th> First Name </th>
				<th> Middle Name </th>
				<th> Last Name </th>
				<th> New/Old </th>
				<th> Grade </th>
				<th> Section </th>
			</tr>
			<tr>
				<td><?php echo $fname ?></td> 
				<td><?php echo $mname ?></td>
				<td><?php echo $sname ?></td>
				<td><?php echo $stat ?></td>
				<td><?php echo $level ?></td>
				<td><?php echo $sec ?></td>
			</tr>
		</table>
	</div>
</html>
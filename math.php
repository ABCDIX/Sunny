<html>
<head>
<title> Sto. Nino </title>
<body>
<link rel="stylesheet" href="style66.css" type="text/css">
<form method="POST" action="math.php">
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
	<a href="tmhome.php" id=log4><font face="Arial Unicode MS" size="2" color="black"> 
	UPDATE GRADE </font> </a>
</td>
</tr>
</table>
</div>

<div id="main">
	<center><p id="ebas"><b>STUDENT LIST AND INFORMATION</b> </p></center>
</div>
	<div id="info4">
		<table id="tlist" border=1>

			<?php session_start();

require('dbconfig.php');

if(isset($_POST['submit']))
{

$level_unsafe=$_POST['level'];
$sec_unsafe=$_POST['sec'];

$level = mysqli_real_escape_string($conn,$level_unsafe);
$sec = mysqli_real_escape_string($conn,$sec_unsafe);

	$sql = "SELECT * FROM adviser";
		$query=mysqli_query($conn,"select * from adviser where level ='$level' and sec ='$sec'")or die(mysqli_error($conn));
		$row=mysqli_fetch_array($query);
		$result = $conn->query($sql);
			
		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
			
			$fname = $row['fname'];
			$mname = $row['mname'];
			$lname = $row['lname'];
			$level = $row['level'];
			$sec   = $row['sec'];
			$mat1  = $row['mat1'];
			$mat2  = $row['mat2'];
			$mat3  = $row['mat3'];
			$mat4  = $row['mat4'];
			
			}
		}else{
		echo "0 results";
		}
		$conn->close();
}
?>
<tr>
				<th> First Name </th>
				<th> Middle Name </th>
				<th> Last Name </th>
				<th> Grade </th>
				<th> Section </th>
				<th> First Grading </th>
				<th> Second Grading </th>
				<th> Third Grading </th>
				<th> Fourth Grading </th>
				<th> </th>
			</tr>
			<tr>
				<td><?php echo $fname ?></td> 
				<td><?php echo $mname ?></td>
				<td><?php echo $lname ?></td>
				<td><?php echo $level ?></td>
				<td><?php echo $sec   ?></td>
				<td><?php echo $mat1 ?></td>
				<td><?php echo $mat2 ?></td>
				<td><?php echo $mat3 ?></td>
				<td><?php echo $mat4 ?></td>
				<td><?php echo "<a href = 'mfetch.php?id=".$row['ID']."'>ADD GRADE</a>"?></td>
			</tr>
			</table>

						</div>
						</html>
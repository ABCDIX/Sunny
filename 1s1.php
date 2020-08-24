<html>
<head>
<title> Sto. Nino </title>
<style>
body {
  background-image: url('back5.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<link rel="stylesheet" href="style1.css" type="text/css">
<form method=POST action=studlog.php>
</head>


<div class="side">
	<img src="logo.png" id="logo">
	<a href="home.php" id="log"><font face="Arial Unicode MS" size="4" color="black"> HOME</font> </a>
	<a href="studhome.php" id=log1><font face="Arial Unicode MS" size="4" color="black"> STUDENT</font> </a>
	<a href="viewgrade.php" id=log2><font face="Arial Unicode MS" size="4" color="black"> GRADE</font> </a>
	<a href="home.php" id=log3><font face="Arial Unicode MS" size="4" color="black"> LOG OUT</font> </a>
</div>
	

<div class="main">
	<img src="banner.jpg" id="banner">
	<pre id="pwe"><center>
	<h4>Sto. Nino The Shepered School</h4></center>
	<?php session_start();

require('dbconfig.php');

if(isset($_POST['submit']))
{

$grade_unsafe=$_POST['grade'];
$sec_unsafe=$_POST['sec'];

$grade = mysqli_real_escape_string($conn,$grade_unsafe);
$sec = mysqli_real_escape_string($conn,$sec_unsafe);

	$sql = "SELECT * FROM sadness where grade = 1 and sec = 1";
		$query=mysqli_query($conn,"select * from sadness where grade ='$grade' and sec ='$sec'")or die(mysqli_error($conn));
		$row=mysqli_fetch_array($query);
		$result = $conn->query($sql);
					echo "<table border=1>";
			echo "<tr>";
			echo "<th>First Name";
			echo "<th>Middle Initial";
			echo "<th>Last Name";
			echo "<th>Age";
			echo "<th>Section";
			echo "<th>First Grading";
			echo "<th>Second Grading";
			echo "<th>Third Grading";
			echo "<th>Fourth Grading";
			echo "<th>Average";
			echo "<th>Update";
			

		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
			echo "<tr>";
			
			echo "<td>".$row['fn'];
			echo "<td>".$row['mn'];
			echo "<td>".$row['ln'];
			echo "<td>".$row['age'];
			echo "<td>".$row['sec'];
			echo "<td>".$row['mfir'];
			echo "<td>".$row['msec'];
			echo "<td>".$row['mthir'];
			echo "<td>".$row['mfou'];
			
			echo "<td>".$row['mavg'];
			
			
			echo "<td><a href = 'tfetch.php?id=".$row['id']."'>UPDATE</a>";
			}
		}else{
		echo "0 results";
		}
		$conn->close();
}
?>

						</div>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>
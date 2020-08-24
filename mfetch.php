<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sunny";
		
	// Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed : " . $conn->connect_error);
	}
	$id = $_GET['id'];		
		$sql = "SELECT * FROM adviser WHERE ID = '$id'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				$id = $row['ID'];
				$fname = $row['fname'];
				$mname = $row['mname'];
				$lname = $row['lname'];
				
			}
		}
		$conn->close();
?>
<html>
<head>
<title>Insert in PHP</title>
</head>
<body>
	<center>
	
	<meta charset="UTF-8">
	<title>Grading System</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<body>
	<div class="page">
		<div class="background">
			<div class="sidebar">
				
				<ul class="navigation">
				<div class="body">
				<div>					
					<div>
						
					<ul class="navigation">
					<li class="selected">
						<a href="faddg.php">Back</a>
					</li>
	
	
	<html>
<head>
	<title>FETCH in PHP</title>
</head>
<body>
	<center>
	<h1>Our Lady of Fatima University</h1>
	<h2>College of Computer Studies</h2>
	<a href="index.php">Home</a>
	<a href="view.php">View Info</a><br>
	<form method = "POST" action = "mupdate.php">
    <table width = "400" cellspacing = "1" cellpadding = "2">
	<tr>
    <td width = "100"></td>
	<td><input name=id type = "hidden" value="<?php echo $id; ?>"></td>
    </tr>
    <tr>
	<td width = "100">First Name</td>
	<td><input name=fname type="text" value="<?php echo $fname;?>"></td>
    </tr>
    <tr>
    <td width = "100">Middle Name</td>
    <td><input name=mname type="text" value="<?php echo $mname; ?>"></td>
    </tr>         
    <tr>
    <td width = "100">Last Name</td>
    <td><input name=lname type = "text" value="<?php echo $lname; ?>"></td>
    </tr>
    <tr>
    <td width = "100" colspan=2 align=center>
	<input name = "submit" type = "submit" value = "UPDATE"> 
	</td>
    </tr>     
    </table>
    </form>
	</center>
	</body>
	</html>
<?php
require("dbconfig.php");
		$ID = $_GET['id'];
		$sql = "SELECT * FROM adviser WHERE ID = $ID";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$ID = $row['ID'];
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
	
	<a href="trec.php">back</a><br><br><br>
	<form method=POST action=tupdate.php>
<table width="400" cellspacing="1" cellpadding="2">
<tr>
		<td width = "100">ID</td>
		<td><input name = "id" type = "text" value = "<?php echo $id; ?>"></td>
		</tr>
<tr>
	<td width="200">First Name:</td>
	<td><input name="fname" type="text" value="<?php echo $fname;?>"></td>
</tr>
<tr>
	<td width="200">Middle Name: </td>
	<td><input name="mname" type="text" value="<?php echo $mname;?>" ></td>
</tr>
<tr>
	<td width="200">Last Name: </td>
	<td><input name="lname" type="text" value="<?php echo $lname;?>"></td>
</tr>

</table>
</body>
</center>
</form>

</html>
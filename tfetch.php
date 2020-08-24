<?php
require("dbconfig.php");
		$id = $_GET['id'];
		$sql = "SELECT * FROM sadness WHERE id = $id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$id = $row['id'];
		$fn = $row['fn'];
		$mn = $row['mn'];
		$ln = $row['ln'];
		$efir= $row['efir'];
		$esec = $row['esec'];
		$ethir = $row['ethir'];
		$efou = $row['efou'];
		
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
	<td><input name="fn" type="text" value="<?php echo $fn;?>"></td>
</tr>
<tr>
	<td width="200">Middle Name: </td>
	<td><input name="mn" type="text" value="<?php echo $mn;?>" ></td>
</tr>
<tr>
	<td width="200">Last Name: </td>
	<td><input name="ln" type="text" value="<?php echo $ln;?>"></td>
</tr>
<tr>
	<td width="200">First Grading: </td>
	<td><input name="efir" type="text" value="<?php echo $efir;?>"></td>
</tr>
<tr>
	<td width="200">Second Grading: </td>
	<td><input name="esec" type="text" value="<?php echo $esec;?>"></td>
</tr>
<tr>
	<td width="200">Third Grading: </td>
	<td><input name="ethir" type="text" value="<?php echo $ethir;?>"></td>
</tr>
<tr>
	<td width="200">Fourth Grading: </td>
	<td><input name="efou" type="text" value="<?php echo $efou;?>"></td>
</tr>
<tr>
	<td width="200">
	<td><input name="submit" type="submit" value="update"></td>
	</td>
</tr>
</table>
</body>
</center>
</form>

</html>
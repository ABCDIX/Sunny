<?php
session_start();
		require('dbconfig.php');	
		$sql = "SELECT * FROM sadness WHERE user = '".$_SESSION['USER']."'";
		$result = $conn->query($sql);
			
			

		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
			$mfir=$row['mfir'];
			$efir=$row['efir'];
			$ffir=$row['ffir'];

			$msec=$row['msec'];
			$esec=$row['esec'];
			$fsec=$row['fsec'];

			$mthir=$row['mthir'];
			$ethir=$row['ethir'];
			$fthir=$row['fthir'];

			$mfou=$row['mfou'];
			$efou=$row['efou'];
			$ffou=$row['ffou'];




			}
		}else{
		echo "0 results";
		echo $_SESSION['USER'];
		}
		$conn->close();
?>
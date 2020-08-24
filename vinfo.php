<?php
require('dbconfig.php');
session_start();

		$sql = "SELECT * FROM sadness WHERE user = '".$_SESSION['USER']."'";

		$result = $conn->query($sql);
			

		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
			
			$fn=$row['fn'];
			$mn=$row['mn'];
			$ln=$row['ln'];
			$id=$row['id'];
			$grade=$row['grade'];
			$sec=$row['sec'];
			
			}
		}else{
		echo "0 results";
		echo $_SESSION['USER'];
	}
		$conn->close();
?>
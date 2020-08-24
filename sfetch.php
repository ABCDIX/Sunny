<?php
require('dbconfig.php');
session_start();

		$sql = "SELECT * FROM sadness WHERE user = '".$_SESSION['USER']."'";

		$result = $conn->query($sql);
			

		if($result->num_rows>0){
			while($row = $result->fetch_assoc()){
			
			
			$id=$row['id'];
			$fn=$row['fn'];
			$mn=$row['mn'];
			$ln=$row['ln'];
 			$grade=$row['grade'];
			$sec=$row['sec'];
			$gen=$row['gen'];
			$rel=$row['rel'];
			$cs=$row['cs'];
			$dob=$row['dob'];
			$pob=$row['pob'];
			$fan=$row['fan'];
			$mon=$row['mon'];
			$tel=$row['tel'];

			}
		}else{
		echo "0 results";
		echo $_SESSION['USER'];
	}
		$conn->close();
?>
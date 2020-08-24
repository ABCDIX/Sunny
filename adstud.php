<?php

	if(isset($_POST['submit'])){
	
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$sname = $_POST['lname'];

		$level = $_POST['level'];
		$sec= $_POST['sec'];
		
	require('dbconfig.php');	
	
		$sql = "INSERT INTO adviser(fname,mname,lname,level,sec)
		VALUES('$fname','$mname','$lname','$level','$sec')";
		
		if($conn->query($sql)===TRUE){
		?>
		<script>
			alert("Successfully Saved Record!!")
		</script>
		<?php
		header("refresh:0;url=addstud.php");
		}else{
		echo "Error!".$sql."<br>".$conn->connect_error;
		}
		$conn->close();
	}
	?>
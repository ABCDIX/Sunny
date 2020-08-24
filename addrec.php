<?php

	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$stat = $_POST['stat'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$sname = $_POST['sname'];

		$level = $_POST['level'];
		$sec= $_POST['sec'];
		$age = $_POST['age'];

		$gen = $_POST['gen'];
		$rel = $_POST['rel'];
		$citi = $_POST['citi'];

		$dob = $_POST['dob'];
		$pob = $_POST['pob'];
		$fn = $_POST['fn'];
		$mn = $_POST['mn'];

		$padd = $_POST['padd'];
		$gn= $_POST['gn'];
		$tel = $_POST['tel'];
	require('dbconfig.php');	
	
		$sql = "INSERT INTO thegang(user,pass,stat,fname,mname,sname,level,sec,age,gen,rel,citi,dob,pob,fn,mn,padd,gn,tel)
		VALUES('$user','$pass','$stat','$fname','$mname','$sname','$level', '$sec','$age','$gen','$rel','$citi','$dob','$pob','$fn','$mn','$padd','$gn','$tel')";
		
		if($conn->query($sql)===TRUE){
		?>
		<script>
			alert("Successfully Saved Record!!")
		</script>
		<?php
		header("refresh:0;url=adrec.php");
		}else{
		echo "Error!".$sql."<br>".$conn->connect_error;
		}
		$conn->close();
	}
	?>

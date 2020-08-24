<?php	
		if(isset($_POST['submit'])){
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
			require('dbconfig.php');

		
				$sql = "SELECT * FROM sadness WHERE user ='".$user."' AND pass ='".$pass."'" ;
				
			$result = $conn -> query($sql);
			if($result){
				if($result ->num_rows > 0){
					$found = mysqli_fetch_array($result);
					$sub=$found['submit'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
					
				
					if($user['user'] == true && $pass ['pass'] == true){
						session_start();
						$_SESSION['USER'] = $user;
							?>
						<?php
						header("refresh:0;url=studwel.php");
						}else{
							?>
						<?php
						}
					}	
			}
		}
	?>
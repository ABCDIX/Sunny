<?php	
		if(isset($_POST['submit'])){
			$user=$_POST['user'];
			$pass=$_POST['pass'];
			
			require('dbconfig.php');

			$sql = "SELECT * FROM tlog WHERE user ='".$user."' AND pass ='".$pass."'" ;
			$result = $conn -> query($sql);
			if($result){
				if($result ->num_rows > 0){
					$found = mysqli_fetch_array($result);
					$sub=$found['sub'];
					$user=$_POST['user'];
					$pass=$_POST['pass'];
				
				if($user['user'] && $pass ['pass']){
						
						if($sub == "math"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=wmteacher.php");}

						elseif($sub == "eng"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=weteacher.php");}

						elseif($sub == "fil"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=wfteacher.php");}

						elseif($sub == "sci"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=wsteacher.php");}

						elseif($sub == "gmrc"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=wgteacher.php");}
					
						elseif($sub == "mapeh"){
							?>
							<script>
								alert('Welcome Teacher')
							</script>
						<?php
						header("refresh:0;url=wpteacher.php");}
						else{
							?>
							<script>
								alert('Welcome Admin')
							</script>
						<?php
						header("refresh:0;url=wteacher.php");}
					
				}
				
							
				else{
					?>
						<script>
							alert('FAILED')
						</script>
					<?php
				
			}
				
			}
			}
		}
	?>
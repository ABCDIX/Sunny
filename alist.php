<?php	
		if(isset($_POST['submit'])){
			$sec=$_POST['sec'];
			$level=$_POST['level'];
			
			require('dbconfig.php');

			$sql = "SELECT * FROM thegang WHERE sec ='".$sec."' AND level ='".$level."'" ;
			$result = $conn -> query($sql);
			if($result){
				if($result ->num_rows > 0){
					$found = mysqli_fetch_array($result);
					$sub=$found['id'];
					$sec=$_POST['sec'];
					$level=$_POST['level'];
				
				if($sec['sec'] && $level ['level']){
						
						if($level == "1"){
							if($sec == "1"){
						header("refresh:0;url=g1s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g1s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g1s3.php");
						}else{
							?>
							<script>
							alert('eror no found section')
							</script>
							<?php
						}
						}
						elseif($level == "2"){
				        if($sec == "1"){
						header("refresh:0;url=g2s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g2s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g2s3.php");
						}else{
							?>
							<script>
							alert('eror no found section')
							</script>
							<?php
						}
						}
						elseif($level == "3"){
						if($sec == "1"){
						header("refresh:0;url=g3s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g3s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g3s3.php");
						}else{
							?>
							<script>
							alert('eror no found section')
							</script>
							<?php
						}
						}
						elseif($level == "4"){
						if($sec == "1"){
				        header("refresh:0;url=g4s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g4s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g4s3.php");
						}else{
							?>
							<script>
							alert('eror no found section')
							</script>
							<?php
						}
						}
						elseif($level == "5"){
						if($sec == "1"){
						header("refresh:0;url=g5s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g5s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g5s3.php");
						}else{
							?>
							<script>
							alert('eror no found section')
							</script>
							<?php
						}
				        }
						elseif($level== "6"){
						if($sec == "1"){
						header("refresh:0;url=g6s1.php");
						}elseif($sec == "2"){
						header("refresh:0;url=g6s2.php");
						}elseif($sec == "3"){
						header("refresh:0;url=g6s3.php");
						}else{
							?>
							<script>
							alert('error no found section')
							</script>
							<?php
							
				        }
						}
				}
						}else{
					?>
						<script>
							alert('No enrolled Student')
						</script>
					<?php
						}
			}
				
						
			
		}	
		
	?>
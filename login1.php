<?php
	require('dbconfig.php');
	
if(isset($_POST['submit'])){
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$position = $_POST['poss'];

	$sql = "SELECT * FROM login WHERE USERNAME='".$user."' 
	AND PASSWORD='".$pass."'";
	
	$result = $conn->query($sql);

	if($result){
		if($result->num_rows > 0){ 
		
		$found = mysqli_fetch_array($result);
		$userid = $found['ID'];
		
		$username = $found['USERNAME'];
		$userpass = $found['PASSWORD'];
		$position = $found['POSITION'];

			if($username == "STUDENT"){
				?>
				
					<script>
						alert('Welcome Student')
						
					</script>
			
				<?php	
				header("refresh:0;url=studrec.php");
			}	
		}else if ($username == "TEACHER"){
		?>
			<script>
				alert('Welcome Teacher');
			</script>
		
		<?php
		header("refresh:0;url=trec.php");
		}else if ($username == "ADMIN")
		?>
			<script>
				alert('Welcome Admin');
			</script>
	
	<?php
			header("refresh:0;url=studrec.php");
	}else{

		echo "Error".$sql;
	}
}
?>
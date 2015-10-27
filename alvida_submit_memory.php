
<?php 
if(isset($_POST['s'])){
	
	$var1=$_POST['email'];
	$var2=$_POST['memory'];
	include 'connection.php';

	$sql = "INSERT INTO alvida (email, memory)
	VALUES ('$var1','$var2')";

	if (mysqli_query($connection, $sql)) {
	echo "<h1><script>sweetAlert('Thanks! Your memory has been shared succesfully ', '', 'success');</script></h1>";
								   } 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);
}
 ?>

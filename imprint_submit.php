<?php 
if(isset($_POST['a'])){
	
	
	
	$var1=$_POST['comment'];
	$var2=$_POST['Details'];
	$var3=$_POST['roll'];
	

	include 'connection.php';

	$sql = "INSERT INTO imprint (comment, Details, roll)
	VALUES ('$var1','$var2','$var3')";

	if (mysqli_query($connection, $sql)) {
		echo "<h1><script>sweetAlert('Thanks! Your message has been succesfully sent', '', 'success');</script></h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);
}
 ?>

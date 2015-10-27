<?php 
if(isset($_POST['sub'])){
	
	$var1=$_POST['email'];
	$var2=$_POST['comment'];
	
	include 'connection.php';

	$sql = "INSERT INTO contactForm (email, comment)
	VALUES ('$var1','$var2')";

	if (mysqli_query($connection, $sql)) {
		echo "<h1><script>sweetAlert('Thanks! Your message has been succesfully sent', '', 'success');</script></h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);
}
 ?>

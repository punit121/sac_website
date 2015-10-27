<?php 
if(isset($_POST['commit'])){
	
	$var1=$_POST['name'];
	$var2=$_POST['Email'];
	$var3=$_POST['contact'];
	$var4=$_POST['city'];
	
	include 'connection.php';


	$sql = "INSERT INTO chapter (name, email,contact ,city)
	VALUES ('$var1','$var2','$var3','$var4')";

	if (mysqli_query($connection, $sql)) {
		echo "<h1><script>sweetAlert('Thanks! Your message has been succesfully sent', '', 'success');</script></h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);
}
 ?>

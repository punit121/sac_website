<?php
	if(isset($_POST['com'])){

	$var1=$_POST['Person_Name'];
	$var2=$_POST['Company_Name'];
	$var3=$_POST['Email_Id'];
	$var4=$_POST['123'];
	$var5=$_POST['Address'];

	
	include 'connection.php';

	$sql = "INSERT INTO association (Person_Name,Company_Name,Email_Id,Phone,Address)
	VALUES ('$var1','$var2','$var3','$var4','$var5')";

	if (mysqli_query($connection, $sql)) {
		echo "<h1><script>sweetAlert('Thanks! Your message has been succesfully sent', '', 'success');</script></h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);
	}
?>

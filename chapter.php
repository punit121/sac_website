<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Students' Alumni Cell &middot; IIT Kharagpur</title>
		<?php include 'metatags.php'; ?>
		<?php include 'css_include.php';?>
	</head>

	<body >        


	<div class="container"  style="text-align:center;">
	<?php include 'topheader.php';?>
	<?php include 'navbar.php' ;?>
	<h2 >ALUMNI CHAPTERS</h2>
	
	<p style="text-align:left;"> For those who want to connect to Chapters in the cities,</p><br>
	     <form  method="post" style="border:solid black;border-radius:5px;padding:5px;margin-left:300px;background-color:#ccc;margin-right:300px;">
		 <br><input type="text"  name="name" placeholder="Name.." style="width:400px" /> 	 
					    <br><br><input type="text" cols="35" name="Email" placeholder="Email.." style="width:400px" />
					    <br><br><input type="text" cols="35" name="contact" placeholder="Contact no.." style="width:400px" />
					    <br><br>					   	   
					   <div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width:400px">City  which you want to connect to
						  <span class="caret"  style="text-align:center;"></span></button>
						  <ul class="dropdown-menu" style="position:absolute;left:60px;width:400px;text-align:center;"">
							<li><a href="#">Atlanta & Southeast</a></li>
							<li><a href="#">Boston & New England</a></li>
							<li><a href="#">Chicago & Midwest</a></li>
							<li><a href="#">Houstan </a></li>
							<li><a href="#"> Mineapolis</a></li>
							<li><a href="#">New York</a></li>
							<li><a href="#">Ohio</a></li>
							<li><a href="#">San Francisco Bay Area</a></li>
							<li><a href="#">Seattle</a></li>
							<li><a href="#">Southern California</a></li>
							<li><a href="#">Washington DC</a></li>
							<li><a href="#">Bangalore</a></li>
							<li><a href="#">Chennai</a></li>
							<li><a href="#">Dehradun</a></li>
							<li><a href="#">Jamshedpur</a></li>
							<li><a href="#">Kolkata</a></li>
							<li><a href="#">Mumbai</a></li>
							<li><a href="#">New Delhi</a></li>
							<li><a href="#">Melbourne</a></li>
							<li><a href="#">Kuwait</a></li>
							<li><a href="#">Sydney</a></li>
							<li><a href="#">Vadodara</a></li>
							<li><a href="#">Pune</a></li>
							<li><a href="#">Toronto</a></li>
							<li><a href="#">Singapore</a></li>
							<li><a href="#">Dubai</a></li>
							<li><a href="#">London</a></li>
						  </ul>
						</div><br>
						  <input type="submit" class="btn btn-danger btn-lg" value="Submit"/>			 
                      </form><br>
	<?php include 'footer.php';?>

	<?php include 'js_include.php';?>
	
	</div>
	</body>
</html>

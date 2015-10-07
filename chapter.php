<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Students' Alumni Cell &middot; IIT Kharagpur</title>
		<?php include 'metatags.php'; ?>
		<?php include 'css_include.php';?>
			<style>
	.foo{
		background-image:url('img/vinay.png');width:1330px;background-repeat:no-repeat;padding:15px;
	}
	</style>
		
		
	</head>

	<body >        


	<div class="container"  >
	<?php include 'topheader.php';?>
	<?php include 'navbar.php' ;?>
	<h2 >ALUMNI CHAPTERS</h2>
	
	<p style="text-align:justify;"> The time spent at IIT Kharagpur is cited by its students to have been the most memorable and cherishable time of their lives. The friends they made here, the things they learned and the experiences they shared are what make them the success that they are. So it is indeed heartbreaking to let go of all these times and part from the institute reminiscing over the golden days spent here. To treasure these moments we have Alvida - the annual farewell dinner held for the passing out batch to get together and share their memorable stories of the moments they spent in the institute.</p><br>
	
	<div style="text-align:center;">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registermentor" style="width:600px;">
						join us
					</button>
	</div>				
					<div class="modal fade" id="registermentor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Get Associated With Us   </h4>
				</div>
				<div class="modal-body" style="text-align:center;">
					<form accept-charset="UTF-8" action="submit_association.php" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="M6yvcdpx3ZcBl16iOYSxL6o5txo1qJx8oJrZ/D3159U=" /></div>

<br><input type="text"  name="name" placeholder="Name.." style="width:500px;padding:6px;border-radius:4px;" /> 	 
					    <br><br><input type="text"  name="Email" placeholder="Email.." style="width:500px;padding:6px;border-radius:4px;" />
					    <br><br><input type="text"  name="contact" placeholder="Contact no.." style="width:500px;padding:6px;border-radius:4px;" />
					    <br><br>					   	   
					   <div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width:500px;padding:6px;">City  which you want to connect to
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
						 


<div class="actions">
  <input class="btn btn-primary btn-lg" name="commit" type="submit" value="Submit" style="width:500px" />
</div>
</form>
				</div>
			</div>
		</div>
	</div>			


		<br><br><br> <br><br> <br><br> <br><br> </div>
		<div class="foo">
		<?php include 'spons-slider.php' ;?>
		<?php include 'footer.php';?>
		</div>
		<?php include 'js_include.php';?>			  
	</body>
</html>

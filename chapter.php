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
	<h2  margin-top:80px;>ALUMNI CHAPTERS</h2>
	
	<p style="text-align:justify;"> The time spent at IIT Kharagpur is cited by its students to have been the most memorable and cherishable time of their lives. The friends they made here, the things they learned and the experiences they shared are what make them the success that they are. So it is indeed heartbreaking to let go of all these times and part from the institute reminiscing over the golden days spent here. To treasure these moments we have Alvida - the annual farewell dinner held for the passing out batch to get together and share their memorable stories of the moments they spent in the institute.</p><br>
	
	<div style="text-align:center;">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registermentor" style="width:600px;">
						Join Us
					</button>
	</div>				
					<div class="modal fade" id="registermentor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" style="text-align:center">Register  </h4>
				</div>
				<div class="modal-body" style="text-align:center;">
					<form accept-charset="UTF-8" action="" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="M6yvcdpx3ZcBl16iOYSxL6o5txo1qJx8oJrZ/D3159U=" /></div>

<br><input type="text"  name="name" placeholder="Name.." style="width:500px;padding:6px;border-radius:4px;" required /> 	 
					    <br><br><input type="email"  name="Email" placeholder="Email.." style="width:500px;padding:6px;border-radius:4px;" required />
					    <br><br><input type="text"  name="contact" placeholder="Contact no.." style="width:500px;padding:6px;border-radius:4px;" required />
					    <br><br>
						<div class="field" style="position:relative;left:35px;width:500px;">
							  <label for="city">Select Your City</label>
							  <select name="city" class="form-control" required >
								<option value="Atlanta & Southeast">Atlanta & Southeast</option>
								<option value="Boston & New England">Boston & New England</option>
								<option value="Chicago & Midwest">Chicago & Midwest</option>
								<option value="Houstan">Houstan </option>
								<option value="Mineapolis">Mineapolis</option>
								<option value="New York">New York</option>
								<option value="Ohio">Ohio</option>
								<option value="San Francisco Bay Area">San Francisco Bay Area </option>
								<option value="Seattle">Seattle</option>
								<option value="Southern California">Southern California</option>
								<option value="Washington DC">Washington DC</option>
								<option value="Houstan">Houstan </option>
								<option value="Bangalore">Bangalore</option>
								<option value="Chennai">Chennai</option>
								<option value="Dehradun">Dehradun</option>
								<option value="Jamshedpur">Jamshedpur</option>
								<option value="Kolkata">Kolkata</option>
								<option value="Mumbai">Mumbai</option>
								<option value="New Delhi">New Delhi</option>
								<option value="Melbourne">Melbourne</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Sydney">Sydney</option>
								<option value="Vadodara">Vadodara</option>
								<option value="Pune">Pune</option>
								<option value="Toronto">Toronto</option>
								<option value="Singapore">Singapore</option>
								<option value="Dubai">Dubai</option>
								<option value="London">London</option>
							  </select>
                       </div>

								<br>


<div class="actions">
  <input class="btn btn-primary btn-lg" name="commit" type="submit" value="Submit" style="width:500px" />
</div>
</form>
				</div>
			</div>
		</div>
	</div>			


		<br><br><br> <br><br> <br><br> <br><br> 
	<?php include 'chapter_submit.php'; ?>
		</div>
		<div class="foo">
		<?php include 'spons-slider.php' ;?>
		<?php include 'footer.php';?>
		</div>
		<?php include 'js_include.php';?>			  
	</body>
</html>

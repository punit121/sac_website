<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Students' Alumni Cell &middot; IIT Kharagpur</title>
   <?php include 'metatags.php'; ?>
   <?php include 'css_include.php';?>  
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
   <script type='text/javascript' src='//cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js'></script>
<style>
.marquee {
  width: 100%;
  overflow: hidden;
  padding: 20px 0px;
}
</style>
</head>
<body >      
	<div class="container">
		<br>
			<?php include 'topheader.php';?><br><br>
		    <?php include 'navbar.php' ;?>
	

			<div class="row">
			    
				<div  class="col-sm-8" style="border-right:solid #ccc;"  >
				        <img src="img/mp.jpg" style="width:100%;height:90px;border-radius:5px;" >
				     <br><br>
					 <p>The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell
					as an initiative to create a platform for the exchange of ideas and experience between the alumni and 
					the current students of IIT Kharagpur.
					With an ocean of possibilities available, students often find it difficult to decide their way out
					into the future. There are lots of instances where students need a mentor who can counsel and guide 
					them through. The alumni can improve students' insight into various aspects of life. Their journey 
					and personal experiences can help the students and motivate them through this pivotal phase of life.
					Under this programme, we invite our alumni from across the world and from different fields to interact
					with the students and help them build their network and gain new perspective on the possibilities open
					to them after graduation.
					<br> <br>For availing this opportunity, register here for the programme..<br><br>
					<a href="http://www.mentorship.iitkgp.ernet.in/mainpage/index"><input type="submit" value="Students" class="btn btn-success btn-lg" style="width:250px;"></a>
					<a href="http://www.mentorship.iitkgp.ernet.in/mainpage/index"><input type="submit" value="Alumni" class="btn btn-success btn-lg" style="width:250px;"></a>
					</div>
					<div class="col-sm-4" id="Demo">	
					    <h2 class="center"> Prominent Alumni Registered for this Programme </h2>
						<div class="marquee" style="height:500px;">					
					   <ul class="list-group" data-spy="scroll" data-target=".navbar" data-offset="50" >
						<li class="list-group-item prominent" id="1">Hardward Business School</li>
						<li class="list-group-item prominent" id="4">Bank fo America</li>
						<li class="list-group-item prominent" id="4">RBL</li>
						<li class="list-group-item prominent" id="4">Citi Bank</li>
						<li class="list-group-item prominent" id="10">McKinsey & Co</li>
						<li class="list-group-item prominent" id="14">Credit Suisse</li>
						<li class="list-group-item prominent" id="4">JP Morgan Chase</li>
						<li class="list-group-item prominent" id="4">Standard Chartered Bank</li>
						<li class="list-group-item prominent" id="4">Deutsche Bank</li>
						<li class="list-group-item prominent" id="20">Hawkins Cookers Limited</li>
						<li class="list-group-item prominent" id="10">Mindtree Limited</li>
						<li class="list-group-item prominent" id="20">Lenovo</li>
						<li class="list-group-item prominent" id="10">Delotti Consultancy SEA</li>
						<li class="list-group-item prominent" id="18">Amazon</li>
						<li class="list-group-item prominent" id="9">Hewelett Packard</li>
						<li class="list-group-item prominent" id="10">Cognizant Technology</li>
						<li class="list-group-item prominent" id="10">Infosys Limited</li>
						<li class="list-group-item prominent" id="9">IBM</li>
						<li class="list-group-item prominent" id="14">Stanford Gradute School of Business and Sustainable Growth Initiative</li>
						<li class="list-group-item prominent" id="10">The Boston Consulting Group</li>
						<li class="list-group-item prominent" id="18">Price Water House</li>
						<li class="list-group-item prominent" id="14">PwC</li>
						<li class="list-group-item prominent" id="10">Capgemini</li>
						<li class="list-group-item prominent" id="10">Miebach Cousulting</li>
						<li class="list-group-item prominent" id="14">KPMG</li>
						<li class="list-group-item prominent" id="10">Schlumbreger</li>
						<li class="list-group-item prominent" id="22">Sheil Oil Company</li>
						<li class="list-group-item prominent" id="22">BP</li>
						<li class="list-group-item prominent" id="22">Essar Oil Limited</li>
						<li class="list-group-item prominent" id="15">Cairn India Limited</li>
						<li class="list-group-item prominent" id="13">Reliance Industries</li>
						<li class="list-group-item prominent" id="15">GE Oil & Gas</li>
						<li class="list-group-item prominent" id="15">Occidental Petroleum</li>
						<li class="list-group-item prominent" id="22">Indain Oil Corporation Limited</li>
						<li class="list-group-item prominent" id="15">ONGC</li>
						<li class="list-group-item prominent" id="all">MIT</li>
						<li class="list-group-item prominent" id="all">Texas A & M</li>
						<li class="list-group-item prominent" id="5">Wockhardt Ltd</li>
						<li class="list-group-item prominent" id="9">Microsoft Research</li>
						<li class="list-group-item prominent" id="10">Innovation Lab, Tata Consulantcy Services</li>
						<li class="list-group-item prominent" id="all">Norwegian Unversity of Science and Technology</li>
						<li class="list-group-item prominent" id="all">Georgia Institute of Technology</li>
						<li class="list-group-item prominent" id="all">GFZ Potsdam</li>
						<li class="list-group-item prominent" id="all">Swansea University</li>
						<li class="list-group-item prominent" id="5">Dalichi Sankyo India Pharma Limited</li>
						<li class="list-group-item prominent" id="all">University of Cincinnati</li>
					</ul>
			       </div>
				</div>
				<img src="http://placehold.it/1100x400  " align="middle";></img>
			   </div>
			   
<script>
//proporcional speed counter (for responsive/fluid use)
var widths = $('.marquee').width()
var duration = widths * 56;

$('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: duration, // for responsive/fluid use
    //duration: 8000000, // for fixed container
    //gap in pixels between the tickers
    gap: $('.marquee').width(),
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'up',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: false
});
</script>
		<?php include 'spons-slider.php'; ?>
		<?php include 'footer.php';?>
		<?php include 'js_include.php';?>

	</div>
<script>
	
   </script>
</body>
</html>

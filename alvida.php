<html>
	<head>
	<title>Students' Alumni Cell &middot; IIT Kharagpur</title>
		<?php include 'metatags.php'; ?>
		<?php include 'css_include.php';?>
		<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
									   }
									   
    .foo{
		background-image:url('img/vinay.png');width:1330px;background-repeat:no-repeat;padding:15px;
		
	}									   
  </style>
	</head>
	
	<body>
	<div class="container">
	<?php include 'topheader.php';?>	
	<?php include 'navbar.php' ;?>
	<img src="img\alvida.jpg" width="1150px"/>
	<div class="row">
	<div class="col-md-8"  style="text-align:justify">
	<h2>ALVIDA</h2><hr>
		<p style="font-size:20px;">
		The time spent at IIT Kharagpur is cited by its students to have been the most memorable and cherishable time of their lives. The friends they made here, the things they learned and the experiences they shared are what make them the success that they are. So it is indeed heartbreaking to let go of all these times and part from the institute reminiscing over the golden days spent here. To treasure these moments we have Alvida - the annual farewell dinner held for the passing out batch to get together and share their memorable stories of the moments they spent in the institute.<br>
		The farewell dinner - Alvida - is generally held in the month of [insert month]. Since its inception in [insert inception year] it has gained popularity among the final year batches as something to look forward to. It’s rare to have most of your batchmates together at one location - sharing a great dinner, laughing at the fun stories they created and discussing about what lies ahead; Alvida gives the students exactly this opportunity. Since the event is also attended by the faculty of IIT Kharagpur, it also gives the graduating students a chance to thank their teachers for preparing them to face the big bad world out there and imparting to them the knowledge they would need to become winners in life.<br>
		Alvida is not a goodbye to the graduating students as the name might indicate. It is IIT Kharagpur wishing its graduating batch good luck for what lies ahead. The connection between the students and the institute is one made for life and the event simply cements the essence of this relationship. Alvida is not the end but the beginning of a new chapter.
		
		</p>
	</div>
	<div class="col-md-4">
	<h2>Share Your Memory</h2><hr>
	<form>
	<input type="text" name="email" placeholder="Email" style="width:350px;border-radius:4px;border-width:1px;background-color:white;margin:10px"/><br>
	<textarea rows="12" cols="36" placeholder="Share your memory" style="width:350px;border-radius:4px;border-width:1px;background-color:white;margin:10px" ></textarea><br>
	<button type="button"  class="btn btn-primary btn-lg" style="width:350px;margin:10px">Submit</input>
	</form>
	
	</div>
	
	</div><h2 style="text-align:left">Moments</h2>	<?php include 'internal slider.php'?>
	</div>
	<div class="foo" >
	<?php include 'spons-slider.php' ;?>
	<?php include 'footer.php'; ?>
	
	</div>
	<?php include 'js_include.php'; ?>
	</body>
</html>
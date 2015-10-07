<head>
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
 <div class="row" >
	 <div class="col-sm-9" style="text-align:justify;">
	 <h2>About Us</h2>
	 <hr><p>
	 The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the aegis of the Office of Alumni Affairs and International Relations. It strives to bridge the gap between IIT Kharagpur and its esteemed alumni community.
     Over the course of past few years, the Students' Alumni Cell has emerged as a key organ of the Office of Alumni Affairs and International Relations in executing its yearlong events and activities. The Students' Alumni Cell continuously endeavours to strengthen the relations of the alumni of this institute and their alma mater. Formed as and operating under the Dean, Alumni Affairs and International Relations, the Students' Alumni Cell has been instrumental in organising the Annual Alumni Meet, publishing the quarterly alumni newsletter (KGPian), the annual literary magazine (Yearnings of Yore) and the Annual Yearbook (Colours Of Life) and among other things like organising regular guest lectures by distinguished alumni in the campus. The Students' Alumni Cell also operates the Student - Alumni Mentorship Programme, My Imprint (Giving Back - Alumni contribution) and organises Alvida (the annual farewell dinner). We look forward to taking up more initiatives and organizing more such events to foster the bond between the institute and the alumni.
     For any queries/information, do write to us: aao@hijli.iitkgp.ernet.in
	 </p>
	 </div>
	 <div  class="col-sm-3" style="background-color:#dddddd; height:450px">
	  <h2>Testimonials</h2>
	  <hr><img src="img\d.png" style="float:left;margin-top:-10px">
		 <div class="marquee" >
		 <p>
		    Short Term Course on Research Methods & Data Analysis (RMDA) 
			Events<br><br>
			National Workshop on Advances in Photonics
			Nov 13-14, 2015<br><br>
			Management Development Programme Training for Trainers
			Nov 13-15, 2015<br><br>
			3 day Workshop on Developments in Pavement Design, Evaluation and Material Characterization
			Nov 15-17, 2015<br><br>
			Short term course on Dielectric Resonator Antennas - Analysis and Design
			Nov 17-21, 2015<br><br>
			International Symposium on Frontiers of Research Speech and Music
			Nov 23-24, 2015<br><br>
			</p>
      </div><img src="img\c.png" style="float:right">
      </div>
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
    duplicated:true
});
</script>
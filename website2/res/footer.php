<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
	Modified by Erica Miller, Zain Ahmed, and Jacob Enerio for the Dulles Robotics Club 2019-2020.
-->
	<!-- Empty space for our footer -->
	<br>
	<br>
	<br>
	<br>
	<!-- Footer -->
	<footer class="page-footer font-small bg-dark fixed-bottom" id = "main-footer">
		<!-- Name and Year (year automatically updates itself) -->
	  	<div class="footer-copyright text-center py-3 text-light">
	    	Dulles Robotics <?php echo date("Y"); ?>-<?php echo (date("Y")+1) ?><br/>
	  	</div>
			<div class="col">
	  	<div class="footer-copyright text-muted text-center small">
	  		This is a student built, operated, and hosted site. Opinions expressed on this site are not necessarily those held by Fort Bend ISD and shall not be attributed to Fort Bend ISD.

				 <div class="text-center">
					 Special Thanks to our sponsors:
						 <a href="https://wm.com" target="_blank"><img src="img/sponsor/wm.png" alt="wmlogo" width="70" height="40" left=(window.width-width/2)+"px"/></a>
						 <a href="https://nasa.gov" target="_blank"><img src="img/sponsor/nasa.png" alt="wmlogo" width="60" height="50" left=(window.width-width/2)+"px"/></a>
						 <a href="https://twc.texas.gov" target="_blank"><img src="img/sponsor/twc.png" alt="wmlogo" width="50" height="50" left=(window.width-width/2)+"px"/></a>
					 </div>
		</div>
	</div>
	</footer>
	<!-- Footer -->
	
	<!-- Footer Script -->
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script>
	$( document ).ready(function() {
		$("#main-footer").hide();
		});
    $(window).scroll(function() {
	if($(window).scrollTop() + $(window).height() > $(document).height() - 5) {
       $("#main-footer").show();
	   //$("#main-footer").show(1000);
		}
	else {
		$("#main-footer").hide();
		//$("#main-footer").hide(1000);
	}
	});
	</script>
	<!-- Footer Script -->

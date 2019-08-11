<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <title>Our Story - Dulles Robotics</title>
    <?php
    	include 'res/head.php';
     ?>
</head>
<body style="height:100%;">

	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-ourstory').setAttribute('class', 'active nav-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">Our Story</h1>
		<hr class="style14">
    <div class="container">
      <!-- Title -->


      <!-- Logo and Welcome -->
      <div id="logo-and-welcome" class="row well border-0 border-secondary">
        <!-- Logo -->
        <div class="col">
          <img src="img/w.png" class="img-fluid" alt="Logo">
         </div>
        <!-- Welcome Message -->
        <div class="col">
          <div class="row">

            <hr>
            <p class="lead text-justify"><strong>The Story of our club, written by Karim Karim - Co-Founder and Former Club President.</storng></p>
            <p class="lead text-justify">The first ever official year of robotics was when I was in 8th grade, there was this guy named Vishnu Iyer, and at this time he'd have been a junior at Dulles. He started "robotics", and you'll see why I put this in quotations very soon.
              I dont know much about this year but I know coffman used to host the meetings, they were very far apart and they were basically physics 1, physics 2 and physics C lessons, it was all very theoretical
  then I joined Dulles and Vishnu became a Senior, I met him on facebook because I was looking for robotics and he was the person that kept showing up. I asked him to teach me how electronics work and how to use hardware (I only knew how to do software up until this point). He spent a lot of time teaching me and convinced me to buy like $200-$300 worth of components (capacitors, resistors, transistors, etc).
</p>

<p class="lead text-justify">
  The "robotics" club wasnt really active until second semester, this time with Mrs.Nguyen as the sponsor and I recall the meetings were on Fridays, but we only ended up having 2 meetings the entire year. The first meeting, I walked in and there were literally only asian guys everywhere, Vishnu was standing at the front with Shreyas (he goes to MIT now) and a bunch of other REALLY smart and talented people. The first meeting was the interest meeting and they were talking about how the club is gonna be focused around using arduino and having small contests within the club, FTC and FRC wasn't even in the air at this point nor was it in anyone's mind they mentioned.
</p>
<p class="lead text-justify">
  I recall this line very clearly, "we're going to actually use physics to make sure everything we want to design works before building any of it, that means finding the ideal CoG, ideal voltage for the motors, etc". It was basically gonna be a club where you join, theorize about robots, and then build maybe 1 or 2 small robots controlled by arduinos and do small projects within the club, so CS club + hardware to a degree. Then the second meeting I remember Vishnu taught us to use an LED and make it blink and then gave us a "homework" lesson to code a weird LED thingy, but we never had another meeting after that.
</p>
<p class="lead text-justify">
At the end of that year, I asked him if I could take over the club since he's graduating. He was basically like "Oh yeah, sure, just talk to this guy named Kenneth, he's going to be a Junior and I think you and him will work well together" I met kenneth that summer, and we formulated a plan for the club next year (again, we didn't have FTC nor FRC in mind yet) and somewhere along here Austin joined and the plan was to keep using arduinos and have it in Mrs.Nguyen's room. I remember as we were planning the interest meeting, we kept moving the date further and further since Mrs.Nguyen was busy.
</p>
<p class="lead text-justify">
  At one point we received an email from a teacher named Brian Sonnier emailed us to ask us about the club. So one day afterschool we just met with him and then we started discussing FTC and how cool it would be to do that, and basically the entire plan for the club changed in an hour or two. I remember Mr. Sonnier was very scary at first and he was very strict and firm with us
  I remember we used to joke about doing FRC and Sonnier was like "pfft yea right! its gonna be years before we do that!" And eventually we ended up with one FRC team as well as two FTC teams.

</p>


          </div>
         </div>
       </div>
      <hr/>

	</div>

	<!-- Footer -->
	<?php
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	<!-- Bootstrap CDN -->
	<?php include 'res/cdn.php';
	 ?>
</body>
</html>
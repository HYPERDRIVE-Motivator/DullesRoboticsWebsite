<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>About - Dulles Robotics</title>
  <?php
    	include 'res/head.php';
     ?>
  <meta property="og:title" content="Dulles Robotics Club - About">
  <meta property="og:image" content="/img/w.png">


</head>

<body style="">

  <?php
		include 'res/nav.php';
	?>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-about').setAttribute('class', 'active nav-item  animated fadeInDown');
  </script>

  <!-- Main Page -->
  <div class="container" style="height:100%;">
    <h1 class="display-3" style="text-align:center;">About Us</h1>
    <hr class="style14">
    <!-- Title -->


    <!-- Logo and Welcome -->

    <!-- Logo -->



    <!-- Welcome Message -->

    <div class="row special-row">
      <div class="col-md-6">
        <img src="img/w.png" class="img-fluid" alt="imagejqjij" width="500">
      </div>
      <div class="col-md-6">
        <h1 class="display-7" style="padding-top:10px">An Introduction:</h1>
        <p class="lead">We are a robotics club based out of Dulles HS in Sugar Land, TX. Our FTC teams are #12456 - Big Red and #13822 - Robovikings. Our FRC team is #7494 - Circuit Bizurkers.
          We also participate in community outreach events and workshops, and come together to promote STEM within our community.</p>
        <!-- <a href="story.php" class="btn btn-primary">View our Story</a> -->
      </div>
    </div>
    <hr />
    <div class="row special-row" style="padding-top:10px">
      <div class="col-md-6">
        <img src="https://drc.aspencdn.me/photos/stateRAS.jpg" class="img-fluid" alt="dcmpphoto" width="500" height="500">
      </div>
      <div class="col-md-6">
        <h1 class="display-7"style="padding-top:10px">The Team</h1>
        <div class="lead">
          <p>Dulles Robotics is comprised of an extremly diverse group of people, from different backgrounds. Each member posses a unique skillset crucial to the functioning of our teams.</p>
        </div>
      </div>
    </div>
    <hr />
    <div class="row special-row" style="padding-top:10px">
      <div class="col-md-6">
        <img src="img/mentor.jpg" class="img-fluid" alt="sartartia" width="500" height="100">
      </div>
      <div class="col-md-6">
        <h1 class="display-7" style="padding-top:10px">Community Impact</h1>
        <div class="lead">
          <p>A huge part of FIRST is the impact a team makes on their community. We have reached out in several ways hosting library camps, demoing our robots at large STEM events, and teaching at orphanages. Beyond that, we host the FTC matches for our league and mentor other teams. We continue to promote FIRST in our school and have been featured on local television channels. </p>
        </div>
      </div>
    </div>






    <div class="container" style="margin-top:40px;">


          <div class="container">

            <div class="row" style="margin-bottom:50px;">
              <div class="col-sm-12">
                <h3 class="display-3" style="text-align:center; margin-bottom:20px;">Departments</h3>
              </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/build.jpg">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Build</h4>
                  <p class="lead-text text-justify lead" style="text-align:center;text-align:center;">The build team is charge of the building of our robots, both for FTC and FRC. They work against deadlines to ensure that the robot is ready for debugging, while also remaining in close communication with the Programming and Design teams to ensure the robot functions correctly and meets the original concept.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/program.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Programming</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The programming team is in charge of programming the instructions for what the robot is supposed to do. This includes programming the robot to respond with the intended results using a controller, as well as writing code for the robot to perform autonomously.  The programmers here at Dulles Robotics use Java.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/design.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Design</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The Design team is responsible for designing the robot. They produce sketches and CAD renderings of the robot prototype.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/pres.jpg">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Presentation</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">Presentation is responsible for the image of Dulles Robotics. They make the PIT displays, and other brand releated content including Graphics Design, and Maintaining this Website.</p>
                </div>
                <div class="col">
                  <img class="img-circle block-center dept-image"  src="https://drc.aspencdn.me/photos/market.png">
                  <h4 class="display-2" style="font-size:40px;text-align:center;">Marketing</h4>
                  <p class="lead-text text-justify lead" style="text-justify:auto;text-align:center;">The marketing team handles the team's finances and sponsorship. Their focus is to raise money for the operations and competitions.</p>
                </div>
            </div>
          </div>

          <div class="col-sm-2 bot-sub"></div>

          <hr class="style20" />
          <div class="row" style="padding-top:10px; margin-left:0%;">
            <h1 class="display-3">The website</h1>
            <hr>
          </div>
          <div class="lead">
            <p>Dullesrobotics.com is self-hosted at home, by a few of our members. Originally starting off as a site on Weebly, we were able to accuire a domain (FQDN), and eventually our own servers. In the summer of 2019, the site recived a major overhaul by transitioning to PHP and Bootstrap. Special thanks to <strong>Geoffrey Dolive</strong> for helping fund our domain for 2019-2020!</p>
          </div>

</div>
</div>

  <!-- Footer -->
  <footer>
    <?php include 'res/footer.php'; ?>
    <?php include 'res/cdn.php'; ?>
    <!-- Scripts -->
    <!-- activate tooltips -->
    <script type="text/javascript">
      $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </footer>
</body>

</html>

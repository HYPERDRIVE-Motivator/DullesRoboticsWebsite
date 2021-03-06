<!--
	Dulles Robotics Club 2019-2020
	Written By Zain Ahmed
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height: 100%;">

<head>
  <title>Robots - Dulles Robotics</title>
  <?php
    include 'res/head.php';
    ?>
  <meta property="og:title" content="Dulles Robotics Club - Robots" />
  <meta property="og:image" content="/img/mock3.png" />
</head>

<body style="scrollbar-width:10px; ">

  <?php
include 'res/nav.php';

?>


<script>
function getCookie(cname) {
      var name = cname + "=";
      //var decodedCookie = decodeURIComponent(document.cookie);
      var ca = document.cookie.split(';');
      for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }
    getCookie("loggedin");

</script>
  <!--Set Active Page to 'active' in navbar (imported from nav.php)-->
  <script type="text/javascript">
    document.getElementById('nav-bar-robot').setAttribute('class', 'active dropdown-item text-white');
  </script>
  <!-- Main Page -->

<br/>
  <div class="container" style="display: table; vertical-align:center; align-content:center; display:table; ">
    <div class="col-md-12">
      <h3 class="display-2" style="text-align:center; color:#fffffe;">Robots</h3>
    </div>



<div class="text-dark">
  <h4 class="display-6" style="text-align:center; margin-top: 40px;color:#fffffe;">2018-2019</h4>
  <hr class="style10"/>
    <!-- Title -->
    <div class="row special-row block" id="#javelin" style="display:flex;">
      <!-- <div class="col-md-2 bot-sub"></div> -->
      <div class="col-md-6" style=" height:500px; width:500px;overflow: hidden;">
        <img src="https://drc.aspencdn.me/photos/javelin.jpg" width="700" height="700" class="img-fluid img-center indxcrop" alt="javelin" style="padding:30px; width: 700px; height: 400px;align-self: right;border-radius: 40px !important;">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px;color:#fffffe;">​​Javelin</h4>
        </div>
        <div class="row" style="color:#a7a9be;">
          <p class="lead text-justify" >Javelin is our first robot to compete in FRC, on <strong> team 7494. </strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Javelin</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> 112 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Deep Space</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 7494</li>


            </ul>
          </div>

          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled" style="color:color:#a7a9be">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT Channelview</span> Finalist Alliance</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT Pasadena</span> Rookie All Stars</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">FIT DCMP</span> Safety Award, Rookie All Stars</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Turing Division</span></li>

            </ul>
          </div>
          <ul >
            <li class="lead text-justify">Rigid build allows for effective defense</li>
            <li class="lead text-justify">Fast Hatch Rate</li>
          </ul>
        </div>
      </div>
      <!-- <div class="col-md-2 bot-sub"></div> -->
    </div>



    <div class="row special-row block" id="#elephant" style="margin-top:20px;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/rrbr.jpg" style="width: 450px; height: 450px; vertical-align:center; padding:20px; align-self:center;border-radius: 30px;" class="img-fluid img-center img-vert-center" alt="twc">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px; color:#fffffe;">​​Elephant</h4>
        </div>
        <div class="row" style="color:#a7a9be;">
          <p class="lead text-justify">Elephant was the robot used in FTC Rover Ruckus by team <strong>#12456 Big Red for the 2018-2019 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Elephant</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Rover Ruckus</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 12456</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Texas UIL State Championships</span></li>


            </ul>
          </div>
        </div>
        <ul style="color:#a7a9be;">
          <li class="lead text-justify">Extending intake for Gold and Silver</li>
          <li class="lead text-justify">Mechanum Wheels allow for strafing</li>
        </ul>
      </div>
    </div>

    <div class="row special-row block" id="#elephant" style="margin-top:20px;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/gearshift.png" style="width: 500px; height: 450px; overflow-x: hidden;vertical-align:center; padding:20px; align-self:center;border-radius: 30px;" class="img-fluid img-center img-vert-center" alt="twc">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px; color:#fffffe;">​​Gearshift</h4>
        </div>
        <div class="row" style="color:#a7a9be;">
          <p class="lead text-justify">Gearshift was the robot used in FTC Rover Ruckus by team <strong>#13822 Robovikings for the 2018-2019 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Gearshift</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Rover Ruckus</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 13822</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>






            </ul>
          </div>
        </div>
        <ul style="color:#a7a9be;">


        </ul>
      </div>
    </div>


    <h4 class="display-6" style="text-align:center; margin-top: 40px;color:#fffffe;">2017-2018</h4>
    <hr class="style10"/>



    <div class="row special-row block" id="#blowtorch" style="color:#a7a9be;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/mock3.jpg" style="width: 450px; height: 450px;padding:20px; align-self:center;  border-radius: 40px;" class="img-fluid img-center img-vert-center" alt="twc" >
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px; color:#fffffe;">​​Blowtorch</h4>
        </div>
        <div class="row">
          <p class="lead text-justify">Blowtorch was the robot used in FTC Relic Recovery by team <strong>#12456 Big Red for the 2017-2018 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Blowtorch</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Relic Recovery</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 12456</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Meet</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Regional</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Texas State Championships</span></li>


            </ul>
          </div>
          <ul>
            <li class="lead text-justfy">Mechanum wheels allow for strafing.</li>
            <li class="lead text-justfy">PID programming enables wheel fail tolerance</li>
        </div>
      </div>
    </div>

    <div class="row special-row block" id="#matchstick" style="color:#a7a9be; margin-top:20px;">

      <div class="col-md-6 text-center" style="align-content:center;">
        <img src="/img/matchstick.png" style="width: 450px; height: 450px;padding:20px; align-self:center; border-radius: 30px;" class="img-fluid img-center img-vert-center" alt="twc">
      </div>
      <div class="col-md-6">
        <div class="row">
          <h4 class="display-2" style="text-align:left; font-size:85px; color:#fffffe;">​​Matchstick</h4>
        </div>
        <div class="row">
          <p class="lead text-justify">Blowtorch was the robot used in FTC Relic Recovery by team <strong>#13822 Robovikings for the 2017-2018 season</strong></p>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Specs</h2>
              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Name</span> Matchstick</li>

              <li class="lead large text-justify rspec"> <span class="badge badge-primary text-light">Weight</span> ~35 lbs</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Game</span> Relic Recovery</li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Team</span> 13822</li>
            </ul>
          </div>
          <div class="col-md-6 inner" style="padding:10px;">


            <ul class="unstyled">
              <h2>Comps</h2>
              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Houston-Southwest League Meet</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Regional</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light">Leauge Qualifer</span></li>

              <li class="lead large rspec"> <span class="badge badge-primary text-light"> Last Chance Qualifier (San Jacinto College) </span></li>




            </ul>
          </div>
          <ul>
            <li class="lead text-justfy">Mechanum wheels allow for strafing.</li>

        </div>
      </div>
    </div>


</div>
<br/>

  </div>



  <!-- Logo and Welcome -->

  <!-- Footer -->
  <footer>
    <?php include 'res/footer.php'; ?>
    <?php include 'res/cdn.php'; ?>
    <script src="/lib/robots.js"></script>
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

<!DOCTYPE html>
<html>
<title>CURIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/A_Deep_Look_into_a_Dark_Sky.jpg/220px-A_Deep_Look_into_a_Dark_Sky.jpg");
}
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-main img{
  height: 200px;
  width: 200px;
}

.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
<body class="w3-light-grey">
<br>
<?php
include 'header.php';
?>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:35px;padding-left: 20px;padding-right: 20px;">

  <div class="jumbotron">
    <!-- Header -->
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiwy4U2IG2zE8sYJU8fFHpa3P6lePuZIPdDrrdqKN-3my7MX4A" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Orbital ATK cancelled</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
          <img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5zcGFjZS5jb20vaW1hZ2VzL2kvMDAwLzA3NC83NzUvb3JpZ2luYWwvc3BhY2V4LWZhbGNvbi1oZWF2eS1sYXVuY2gtZGVidXQuanBn" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Falcon heavy rocket launch</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu9gDRz1eUyFEqr-AKwmr-8GZvb1GWdGlOOU6FhOfOcW1gebnQwQ" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Rocket launch site</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3">
        <h3>For space Enthusiasts</h3>
        <p style="font-size: 18px;"> At <em>"Curio-The Rocketopia"</em>, we are dedicated to being the most uptodate and accurate source of information about orbital rocket launches worldwide.
        Never again wonder when or where to watch the next rocket launch!!. You can always head to our main page for live coverage of the active launch at any time.</p>
        <div class="alert alert-warning"><strong>Launch Dates are always subjected to change !!</strong></div>
      </div>
    </div>
  </div>
</div>  
<button class="accordion"><h3>Factors affecting Rocket Launch</h3></button>
<div class="panel">
  <p>A few factors affect rocket launch and escape velocity, but they are different since the rocket is at different phases of flight at both times:
    <ul>
      <li>
        <strong>Maximum Wind Resistance:</strong> Most rockets lack large aerodynamic lifting surfaces to get the large control moments needed to passively stabilize itself, because it spends most of its time either at high speed in the atmosphere or outside of the atmosphere. As such, to ensure the rocket can launch in bad conditions (crosswinds approaching gale strength, 10–20 m/s), the rocket has a high lift off speed. This is usually achieved by using something called a launch rail (shown below). It essentially allows the rocket to accelerate in a straight line before being released to the open air, giving it enough speed to make effective use of small control surfaces, or have enough speed to not really be affected by the wind. A rough rule of thumb is the rocket launch speed is 10X that of the wind speed if its being controlled aerodynamically, 2X if it thrust vectoring)
      </li><br>
      <li>
        <strong>Maximum Acceleration Tolerable by Payload:</strong> Because the launch rail length is finite, and usually fairly low because of high costs of construction, it is made as short as possible. The lower limit on launch rail length is the maximum acceleration the payload can take. If the rocket payload is people or complex living organisms (like cats or mice), the rocket cannot launch at 3,000 g’s, as it would kill the payload. However, if it is a warhead or hardened satellite, the launch acceleration can be enormous, near 300–600 g’s. This is controlled by the thrust to weight ratio of rocket and lift off mass of the rocket. Rockets designed to accelerate as quickly as possible maximum thrust to weight ratio on liftoff and minimize liftoff mass of the rocket.
        Now, moving onto how the rocket escape velocity is determined. If you mean the maximum speed of the rocket, that is determined by the following. The technical term is delta-V, since it is really the capacity of the rocket to change speed from 0 (on the ground) to its maximum wherever it is flying.
      </li><br>
      <li>
        <strong>Propellant Specific Energy:</strong> The more energy a unit mass of propellant gives off, the higher the rocket speed. This is controlled by something called exhaust velocity, and is plugged into an equation called the rocket equation to see how fast a rocket could fly. The rocket equation is: Exhaust Velocity * ln(Rocket Mass on Liftoff/Rocket Mass at burnout) = Maximum Velocity of Rocket
      </li><br>
      <li>
         <strong>Trajectory :</strong> While the theoretical maximum velocity is dictated by the rocket equation, a number of factors can sap energy during a rocket ascent. The magnitude of this energy leakage is controlled by the trajectory the rocket follows to get to its destination. Generally, the trajectory is made to ensure the rocket spends the minimum amount of time in the atmosphere, and minimum amount of time reaching orbit, because of drag losses and gravity losses. Drag losses are when the rocket faces air resistance that forces it to spend more energy to fly at the same spend. Gravity losses are when the rocket is thrusting upward and expending energy to maintain position (essentially the energy used to support the rocket’s weight). If the rocket is reusable, it also determines how much propellant (or parachute) will be needed to land the rocket safely back on the ground.
      </li><br>
      <li>
        <strong>Rocket Structural Design: </strong>A rocket is made as stiff as possible, which helps reduce its structural weight, and in turn increases its mass ratio by lowering the empty rocket mass. This is the reason why large rockets are not launched in high wind conditions, because the rocket is not stiffened to bending loads, it would fly apart if launched in the high winds. Essentially controlled by the amount of strain energy the materials used in the rocket can carry and the trajectory flown (which imposes the lift, drag, and thrust loads which the rocket will have to resist). The material maximum strain energy is defined by the strength to weight ratio (maximum stress tolerable/material density). The maximum strain energy carried by the airframe is equal to = load carried ^2 / stiffness of airframe in that direction. If the rocket is designed to be reusable, the maximum stress tolerable is lower since the material will need to last more than 1 launch, and the airframe weight increases.
      </li><br>
      <li>
        Now, if by escape velocity you meant the speed needed to leave Earth completely, this is determined solely by the mass of the Earth (or whatever planet you are launching from) and its radius. A high mass, small radius planet will have a HUGE escape velocity, with the limit being a black hole, where the escape velocity is faster than the speed of light.
      </li>
    </ul></p>
</div>

<button class="accordion"><h3>Factors affecting scheduling of Launch</h3></button>
<div class="panel">
  <p><ul>
    <li>
      <strong>Lightning :</strong> Electrical surges can trigger loss of control and bring about the destruction of rockets. It is also hazardous to ground crews during launch and routine site operations.
    </li><br>
    <li>
      <strong>Wind : The following factors are influenced by the wind :</strong>
        <ul>
          <li> range safety and environmental protection;</li>
          <li> flight trajectory;</li> 
          <li> vehicle controllability</li>
          <li> splashdown location, safety and operations;</li>
         <li> tower clearance;</li>
          <li> solid booster separation function;</li>
          <li> structural loadings on vehicles, towers, and other equipment;</li>

          <li>landing safety (for manned and unmanned recoverable vehicles)</li>
          <li> site safety during routine operations and construction;</li>
          <li> safety and efficiency of transport of components and space vehicles;</li>
          <li> stability of vehicle on pad and during transfer from assembly building;</li>
          <li>rate of salt deposition (and therefore of corrosion) on launch structures.</li>
        </ul><br></li>
    <li>
      <strong>Turbulence :</strong>Turbulence may impose unacceptable stresses on key structural elements such as the attachment points
      of hybrid vehicles. As large vehicles of complex shape (and therefore of more complex aerodynamic behavior) are developed, it is likely that their susceptibility to severe loading caused by turbulence will also increase. Similar considerations apply to the airborne transportation of large components or vehicles. At present, there are no direct means of turbulence measurement, apart from in situ investigation by aircraft.
    </li><br>
    <li>
      <strong>Temperature and humidity :</strong> The near-surface temperature and humidity fields influence the formation of fog and low cloud, obstructing the optical tracking which is an important element in the early stages of the launch. They also affect the formation of ice on the vehicle. During the launch, this ice could become dislodged and cause damage to sensitive components, such as the thermal tiles in the case of some recoverable vehicles (Turnill 1987). The vertical profile of temperature and humidity fields yields important information for general weather forecasting purposes, and for the prediction of precipitation, convection, lightning risk, and cloud characteristics.Excessively high or low temperatures may cause damage to components (for example, as in the case of the infamous Shuttle O-rings [Presidential Commission on the Space Shuttle Accident 1986]), and may also create discomfort and loss of performance in ground crews. High-average temperatures probably accelerate corrosion due to windblown salt and moisture prevalent in the coastal locations favored for launch sites.
    </li>      
  </ul></p>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<br><br>
  <div class="w3-container">
    <h5 style="color: white;">Countries with Successful launches :</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>United States</td>
        <td>32%</td>
      </tr>
      <tr>
        <td>Russia</td>
        <td>23%</td>
      </tr>
      <tr>
        <td>China</td>
        <td>20%</td>
      </tr>
      <tr>
        <td>Europe</td>
        <td>10%</td>
      </tr>
      <tr>
        <td>Japan</td>
        <td>8%</td>
      </tr>
      <tr>
        <td>India</td>
        <td>6%</td>
      </tr>
      <tr>
        <td>New zealand</td>
        <td>1%</td>
      </tr>
    </table><br>
  </div>

<br>
  <div class="w3-container">
    <h5 style="color: white;">Major Spaceports of NASA</h5>
  <iframe src="https://www.google.com/maps/d/embed?mid=1PbSUPqC4R8jXreQ9BReSEacBErM" width="500" height="300" style=""></iframe>
  </div>

  <!-- Footer -->
 
  <!-- End page content -->

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
</body>
</html>

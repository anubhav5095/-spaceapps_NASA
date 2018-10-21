<!DOCTYPE html>
<html>
<title>CURIO</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style> 
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}


#a{
  text-decoration: none;
}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-xlarge" style="z-index:4;background-color: cornflowerblue;">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button><br>
  <span class="w3-bar-item w3-left"><em></em></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:300px; background-color:#333; black;color: white;opacity: ;border-right: 2px solid #333;" id="mySidebar">
<br>
  <div class="w3-container"><br>
    <table>
      <tr>
        
        <td>
          <img src="https://image.flaticon.com/icons/svg/432/432381.svg" style="width: 90px;height: 90px;">
        </td>
        <td>&ensp;</td>
        <td>
          <h3 style="color:dodgerblue;font-size: 20px;"><strong> CURIO-<br>"The Rocketopia"</strong></h3> 
        </td>
      </tr>
    </table>
    <hr>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="nasa_home.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-usesrs fa-fw"></i>Overview</a>
    <a href="upcoming.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-sbank fa-fw"></i>Upcoming Launches</a>
    <a href="viewOnline.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-diamonsd fa-fw"></i>View Launches Online</a>
    <a href="agency.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-diamonsd fa-fw"></i>Organisation and Agencies</a>
    <a href="spaceport.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-diamonsd fa-fw"></i>Spaceports</a>
    <a href="ssites.php" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-besll fa-fw"></i>Real Time Experience</a>
    <a href="https://webvr.space/" class="w3-bar-item w3-button w3-padding" id="a"><i class="fa fa-besll fa-fw"></i>VR Experience</a>


  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
 

</body>
</html>
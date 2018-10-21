<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sites</title>

  <style>

  #tab {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
  }

  #tab th, #tab td {
      text-align: left;
      padding: 8px;
  }

  #tab tr:nth-child(even){background-color: #f2f2f2}
  #tab a{
    color: blue;
  }
  img{
  height:100px;width:100px;
  }

  a :hover{
    text-decoration: none;
    text-decoration-style: none;
  }
  </style>
</head>
<body>
<?php
include 'header.php';
?>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:35px;padding-left: 20px;padding-right: 20px;">
<br>
<br>
<div class="container">

  <table id="tab" class="table table-hover">
    <thead class="dark">
      <tr>
        <th>IMAGE</th>
        <th>SATELLITE</th>
        <th>VIEW SITES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="https://spacenews.com/wp-content/uploads/2018/02/f9-govsat.jpg" alt="Avatar" style="width:200px"></td>
        <td>Falcon-9 Es'hail 2</td>
        <td><ul>
        <li>Alan Shepard Beach<br></li>
        <li>Canavarel National Seashore<br></li>
        <li>Exploration Tower<br></li>

        </ul>
        <a href="https://goo.gl/maps/Q1GsXtYyQPQ2"><span class="glyphicon glyphicon-map-marker"></span> Click Here To View Map</a><br>
        </td>

      </tr>
      <tr>
        <td><img src="https://spaceflight101.com/wp-content/uploads/2017/10/29706136403_1fba77ce5f_o9.jpg" alt="Avatar" style="width:200px"></td>
        <td>Antares NG-10</td>
        <td><ul>
        <li>Kennedy Space Center at Cape Canaveral<br></li>
      	<li>Shores of the Indian River<br></li>
      	<li>U.S. Space Walk of Fame<br></li>
      	<li>Playalinda Beach<br></li>
      	<li>U.S. Astronauts Hall of Fame<br></li>
      	<li>Port Canaveral<br></li>
      	<li>Cocoa Beach Pier<br></li>
      	<li>The Space Coast<br></li>
      	<li>Tampa<br></li>

        </ul>
        <a href="https://goo.gl/maps/Q1GsXtYyQPQ2"><span class="glyphicon glyphicon-map-marker"></span> Click Here To View Map</a><br>
        </td>


      </tr>
      <tr>
        <td><img src="https://i.ndtvimg.com/i/2018-03/isro-gslv-gsat-6a_650x400_51522142024.jpg" alt="Avatar" style="width:200px"></td>
        <td>GSLV MK3 GSAT 29</td>
        <td><ul>
        <li>Pullicat Lake<br></li>

        </ul>
        <a href="https://goo.gl/maps/pFahxdpPcCy"><span class="glyphicon glyphicon-map-marker"></span> Click Here To View Map</a><br>
        </td>

      </tr>
      <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Ariane_5ES_with_ATV_4_on_its_way_to_ELA-3.jpg/300px-Ariane_5ES_with_ATV_4_on_its_way_to_ELA-3.jpg" alt="Avatar" style="width:200px"></td>
        <td>Ariane-5 Bepicolombo</td>
          <td>
          <ul>
          <li>Surf Beach<br></li>
          <li>Renwick Ave & West Ocean Ave<br></li>
          <li>Harris Grade Rd<br></li>
          
          </ul>
          <a href="https://www.google.com/maps/d/embed?mid=1scyvjUNKDZ3Gx2VSjn23GFJp-ryQsxS5"><span class="glyphicon glyphicon-map-marker"></span> Click Here To View Map</a>

        </td>

      </tr>
      <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/H_IIA_No._F23_with_GPM_on_its_way_to_the_launchpad.jpg/300px-H_IIA_No._F23_with_GPM_on_its_way_to_the_launchpad.jpg" style="width:200px"></td>
        <td>H-2A GOSAT-2 & Khalifasat</td>
        <td>
          <ul>
          <li>Tanegashima Island(3 Km from the space centre)<br>
          </li>

          </ul>
        <a href="https://goo.gl/maps/XVq1nSSzisJ2"> <span class="glyphicon glyphicon-map-marker"></span> Here For Map</a><br>
        </td>

      </tr>

    </tbody>
  </table>
</div>
</div>

</body>
</html>

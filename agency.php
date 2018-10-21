<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  
  <style>

  #tab {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
  }

  #tab th,#tab td {
      text-align: left;
      padding: 8px;
  }
  #tab a{
    color: blue;
  }
  tr:nth-child(even){background-color: #f2f2f2}

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

<div class="container">
<br>  
  <table class="table table-hover" id="tab">
    <thead class="dark">
      <tr>
        <th>SATELLITE</th>
        <th>COMPANY</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Pegasus XL | Ionospheric Connection Explorer (ICON)</td>
        <td><a href="http://www.northropgrumman.com/Pages/default.aspx">Northrop Grumman</a></td>

      </tr>
      <tr>
        <td>H-IIA | KhalifaSat & GOSAT-2</td>
        <td><a href="https://www.mhi.com/">Mitshubishi Heavy Industries</a></td>

      </tr>
      <tr>
        <td>Soyuz STB/Fregat | MetOp-C</td>
        <td><a href="http://www.arianespace.com/">Arianespace</a></td>

      </tr>
      <tr>
        <td>Antares 230 | Cygnus CRS NG-10</td>
        <td><a href="http://www.northropgrumman.com/Pages/default.aspx">Northrop Grumman</a></td>

      </tr>
      <tr>
        <td>Ariane 5 ECA | Hellas Sat 4/SaudiGeoSat-1</td>
        <td><a href="http://www.arianespace.com/">Arianespace</a></td>

      </tr>
      <tr>
        <td>Delta IV Heavy | NROL-71</td>
        <td><a href="https://www.ulalaunch.com/">United Launch Alliance</a></td>

      </tr>
      <tr>
        <td>Electron | It's Business Time</td>
          <td><a href="https://www.rocketlabusa.com/">Rocket Lab</a></td>

      </tr>
      <tr>
        <td>Falcon 9 Block 5 | Es'hail 2</td>
        <td><a href="https://www.spacex.com/">SpaceX</a></td>

      </tr>
      <tr>
        <td>GSLV Mk II | GSAT-7A</td>
        <td><a href="http://indianairforce.nic.in/">Indian Air Force</a></td>

      </tr>
      <tr>
        <td>GSLV Mk III | GSAT-29</td>
        <td><a href="https://www.isro.gov.in/">ISRO</a></td>

      </tr>
      <tr>
        <td>PSLV XL | HySIS</td>
        <td><a href="https://www.isro.gov.in/">ISRO</a></td>

      </tr>
      <tr>
        <td>Rokot / Briz-KM | Gonets-M24, Gonets-M25, Gonets-M26 & 2 x Blits-M</td>
        <td><a href="https://en.wikipedia.org/wiki/Russian_Space_Forces">Russian Space Force</a></td>

      </tr>
      <tr>
        <td>Soyuz 2.1B/Fregat-M | Glonass-M</td>
        <td><a href="http://en.roscosmos.ru/">Roscosmos</a></td>

      </tr>
      <tr>
        <td>Soyuz-FG | Progress MS-10 (71P)</td>
        <td><a href="http://en.roscosmos.ru/">Roscosmos</a></td>

      </tr>
      <tr>
        <td>Falcon 9 Block 5 | Spaceflight SSO-A</td>
        <td><a href="https://www.spacex.com/">SpaceX</a></td>

      </tr>
      <tr>
        <td>Falcon 9 Block 5 | SpX CRS-16</td>
        <td><a href="https://www.spacex.com/">SpaceX</a></td>

      </tr>
      <tr>
        <td>Ariane 5 ECA | EDRS-C/HYLAS 3</td>
        <td><a href="http://www.arianespace.com/">Arianespace</a></td>

      </tr>
      <tr>
        <td>Ariane 5 ECA | GEO-KOMPSAT-2A</td>
        <td><a href="http://www.arianespace.com/">Arianespace</a></td>

      </tr>
      <tr>
        <td>Electron | VCLS ELaNa XIX</td>
        <td><a href="https://www.rocketlabusa.com/">Rocket Lab</a></td>

      </tr>
      <tr>
        <td>Falcon 9 Block 5 | PSN VI</td>
        <td><a href="https://www.spacex.com/">SpaceX</a></td>

      </tr>
      <tr>
        <td>Falcon Heavy | Arabsat-6A</td>
        <td><a href="https://www.spacex.com/">SpaceX</a></td>

      </tr>
      <tr>
        <td>Rokot / Briz-KM | Geo-IK-2 N13L</td>
        <td><a href="http://en.roscosmos.ru/">Roscosmos</a></td>

      </tr>
    </tbody>
  </table>
</div>

</body>
</html>


<!DOCTYPE html>
<html>
<title>CURIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 20px 0;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: ;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}

#more {display: none;}

a{
	color: dodgerblue;
}
#name{
	background-color: darkgrey;
}
img{
	width: 150px;
	height: 200px;
}
.w3-main{
	background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/A_Deep_Look_into_a_Dark_Sky.jpg/220px-A_Deep_Look_into_a_Dark_Sky.jpg");
}
</style>
<body class="w3-light-grey" >
<?php
include 'header.php';
?> 

<div class="w3-main" style="margin-left:300px;margin-top:30px;padding-left: 30px;background-color:;padding-right: 30px;"><br>
<div class="container" style="background-color: darkgrey; color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Ariane+5+ECA_1920.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo0" > </label>
  		</td>
  		<td>
			<p><span id="name">Ariane 5 ECA | BepiColombo</span> <br>T-0:<label id="time0">October 20, 2018 01:45:28</label>UTC<br>October 20, 2018 01:45:28 UTC</p>
  			<p>BepiColombo is a joint mission of the ESA and the JAXA to the planet Mercury. The mission comprises two satellites to be launched together: the Mercury Planetary Orbiter (MPO) and the Mercury Magnetospheric Orbiter (MMO). The mission will perform a comprehensive study of Mercury, including its magnetic field, magnetosphere, interior structure and surface.</p>
  		</td>
  	</tr>
  </table>
</div>

<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Pegasus+XL_1280.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo1" > </label>
  		</td>
  		<td>
			<p><span id="name">Pegasus XL | Ionospheric Connection Explorer (ICON)</span> <br>T-0: <label id="time1">October 26, 2018 08:05:00</label> UTC<br>October 26, 2018 08:00:00 UTC - October 26, 2018 09:30:00 UTC</p>
			Location : <a href="https://goo.gl/maps/cVz4hSDCxTq">Cape Canaveral</a>
			<br>
  			<p>Ionospheric Connection Explorer (ICON) is a NASA mission to study Earth's thermosphere and ionosphere and the connection between space weather and weather on our planet. Mission is planned to last for two years.</p>
  		</td>
  	</tr>
  </table>
</div>

<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/H-IIA_2560.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo2" class="glow"> </label>
  		</td>
  		<td>
			<p><span id="name">H-IIA | KhalifaSat & GOSAT-2</span> <br>T-0: October 29, 2018 04:08:00 UTC<br>October 29, 2018 04:08:00 UTC - October 29, 2018 04:20:00 UTC</p>
			Location : <a href="https://goo.gl/maps/L9NixgReo9A2">Osaki Y LP1, Tanegashima, Japan</a>
  			<p>KhalifaSat is an Earth observation satellite for UAE. KhalifaSat will provide high-resolution imagery of Earth to be used for various purposes, including urban planning, change monitoring, area classification, monitoring environmental change and aiding relief efforts for natural disasters GOSAT 2 (Greenhouse gases Observing SATellite 2) is a Japanese satellite dedicated to greenhouse gas measurement from space. It's a follow on to the GOSAT mission and includes such improvements as an ability to gather more precise data and monitor carbon monoxide concentrations. The mission will perform a comprehensive study of Mercury, including its magnetic field, magnetosphere, interior structure and surface.</p>			
  		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Fregat_1920.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo3" class="glow"> </label>
  		</td>
  		<td>
			<p><span id="name">Soyuz STB/Fregat | MetOp-C</span> <br>T-0: November 7, 2018 00:47:51 UTC <br>November 7, 2018 00:47:51 UTC</p>
			Location : <a href="https://goo.gl/maps/bW9PfFLw8A72">Soyuz Launch Complex, Kourou/Sinnamary</a>
  			<p>MetOp is a series of three polar orbiting meteorological satellites developed by the European Space Agency (ESA).</p>
  		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Antares230.jpg_1440.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo4" class="glow"> </label>
  		</td>
  		<td>
			<p><span id="name">Antares 230 | Cygnus CRS NG-10o</span> <br>T-0: November 15, 2018 09:49:00 UTC <br>November 15, 2018 09:49:00 UTC</p>
			Location : <a href="https://goo.gl/maps/VwxyiXXhgX62">Launch Area 0 A, Wallops Island, Virginia</a>
  			<p></p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Ariane+5+ECA_1920.jpg" alt="rocket" style="width:150px;">
  			&emsp;<label id="demo5" class="glow"> </label>
  		</td>
  		<td>
			<p><span id="name">Ariane 5 ECA | Hellas Sat 4/SaudiGeoSat-1</span> <br>TBD <br></p>
			Location : <a href="https://goo.gl/maps/ah9jyE5uRCL2">Ariane Launch Area 3, Kourou </a>
  			<p></p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Antares230.jpg_1440.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Delta IV Heavy | NROL-71</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/R9dcNHoAt2w">Space Launch Complex 6, Vandenberg AFB, CA</a>
  			<p>Classified payload for the U.S. National Reconnaissance Office.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Electron.jpg_1440.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Electron | It's Business Time</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/R9dcNHoAt2w">Rocket Lab Launch Complex 1</a>
  			<p>Electron's first commercial launch will feature two Lemur-2 cubesats for Spire Global, a single cubesat for GeoOptics, a NABEO drag sail demonstrator for High Performance Space Structure Systems, and an IRVINE01 cubesat from the Irvine CubeSat STEM Program.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Falcon9Block5.jpg_1920.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Falcon 9 Block 5 | Es'hail 2</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/x2Wfb8Xr2rS2">Launch Complex 39A, Kennedy Space Center, FL</a>
  			<p>Es'hail 2 is a communications satellite operated by a Quatar based company. The satellite will operate at 26 degrees East longitude along a geostationary orbit to provide direct-to-home television services in the Middle East and North Africa region.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">GSLV Mk II | GSAT-7A</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/ZC4xBU4rghJ2">Satish Dhawan Space Centre Second Launch Pad</a>
  			<p>GSAT-7A is a geostationary communications satellite for the Indian Air Force (IAF).</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/placeholder_1920.png" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">GSLV Mk III | GSAT-29</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/ZC4xBU4rghJ2">Satish Dhawan Space Centre Second Launch Pad</a>
  			<p>GSAT-29 is a geostationary communications satellite developed by ISRO. GSAT-29 carries Ka x Ku multi-beam and optical communication payloads.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/PSLV+XL_1440.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">PSLV XL | HySIS</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/ZC4xBU4rghJ2">Satish Dhawan Space Centre Second Launch Pad</a>
  			<p>HySIS (Hyper Spectral Imaging Spectrometer) is a small Indian earth observation satellite developed by ISRO. The satellite is based on the SSB-2 bus inherited from SARAL. The mission will provide global coverage on repetitive basis to users and also supplement the existing multi-spectral missions. The space-borne Hyper Spectral Imaging Spectrometer (HySIS) will provide earth surface image in VNIR (0.4 to 0.95 m) and SWIR (0.9 to 2.5 m) spectral region in “70+256” contiguous spectral bands in each spectral range with 10 nm bandwidth. It will provide 30 m spatial resolution and a swath of 30 km. Two spectrometers (VNIR and SWIR) are being developed and the integrated payload deck will be delivered for satellite level integration.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/+Briz-KM_2560.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Rokot / Briz-KM | Gonets-M24, Gonets-M25, Gonets-M26 & 2 x Blits-M</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/S48tPcuWVqE2">Plesetsk 133/3 </a>
  			<p>Gonets-M are an upgraded version of Gonets satellites, derived from military communications system Strela-3. Gonets-M constellation is tasked with monitoring ecological and industrial objects, providing communication and data transmission services, covering also the remote areas like the Far North region. Gonets-M satellites share the ride with the Blits-M microsatellite, which is a geodesic satellite tasked with determining precise orbit parameters for GLONASS satellites.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/Soyuz-FG_2560.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Soyuz-FG | Progress MS-10 (71P)</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/q9UftqmRjB92">1/5, Baikonur Cosmodrome, Kazakhstan</a>
  			<p>The Progress resupply vehicle is an automated, unpiloted version of the Soyuz spacecraft that is used to bring supplies and fuel to the International Space Station.</p>
   		</td>
  	</tr>
  </table>
</div>
<div class="container" style="background-color: darkgrey;color: black;">
  <table>
  	<tr>
  		<td>
  			<img src="https://s3.amazonaws.com/launchlibrary/RocketImages/FalconHeavy.jpg_2560.jpg" alt="rocket" style="width:150px;">
  		</td>
  		<td>
			<p><span id="name">Falcon Heavy | Arabsat-6A</span> <br>TBD</p>
			Location : <a href="https://goo.gl/maps/wR1J3jThqkL2">Launch Complex 39A, Kennedy Space Center, FL</a>
  			<p>Gonets-M are an upgraded version of Gonets satellites, derived from military communications system Strela-3. Gonets-M constellation is tasked with monitoring ecological and industrial objects, providing communication and data transmission services, covering also the remote areas like the Far North region. Gonets-M satellites share the ride with the Blits-M microsatellite, which is a geodesic satellite tasked with determining precise orbit parameters for GLONASS satellites.</p>
   		</td>
  	</tr>
  </table>
</div>
<br>
</div>
</body>
</html>




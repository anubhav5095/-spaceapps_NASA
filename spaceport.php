<!DOCTYPE html>
<html>
<head>

<style>
body{
  background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/A_Deep_Look_into_a_Dark_Sky.jpg/220px-A_Deep_Look_into_a_Dark_Sky.jpg");
}
.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    margin-bottom: 10px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0px;
    display: none;
    overflow: hidden;
    width: 100%;
    height: 50%;
    background-color: #f1f1f1;
}

#tab {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
}

#tab th, #tab td {
    text-align: left;
    padding: 8px;
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
<h2> MAJOR SPACEPORTS AROUND THE GLOBE</h2>
<div class="container" style="width:100%;">
<button class="collapsible">AFRICA</button>
<div class="content">
  <div  style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>Algeria</td>
        <td>Centre interarmées d'essais d'engins spéciaux (CIEES), Hammaguir</td>
        <td>31.09951°N 2.83581°W</td>
        <td>1947–1967</td>
        <td>230</td>
        <td>18000 kg</td>
        <td>Orbital</td>
        <td>Operated by France</td>
      </tr>
      <tr>
        <td>Kenya</td>
        <td>Broglio Space Centre (San Marco), Malindi</td>
        <td>2.94080°S 40.21340°E</td>
        <td>1964–1988</td>
        <td>27</td>
        <td>20000 kg</td>
        <td>Orbital</td>
        <td>Scout rockets, operated by ASI and Sapienza University of Rome, Italy</td>
      </tr>
      <tr>
        <td>Algeria</td>
        <td>Reggane</td>
        <td>26.71895°N 0.27691°E</td>
        <td>1961–1965	</td>
        <td>10</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </table>
  </div>
</div><br>
<button class="collapsible">ASIA</button>
<div class="content">
  <div style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>India</td>
        <td>Vikram Sarabhai Space Centre, Thiruvananthapuram (thumba), Kerala</td>
        <td>8.5314°N 76.8690°E</td>
        <td>1962-</td>
        <td>>2000</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>India</td>
        <td>Satish Dhawan Space Centre (Sriharikota), Andhra Pradesh</td>
        <td>13.73740°N 80.23510°E</td>
        <td>1971–</td>
        <td>-</td>
        <td>402000 kg</td>
        <td>Interplanetary</td>
        <td>Satellites and lunar probes</td>
      </tr>
      <tr>
        <td>India</td>
        <td>Abdul Kalam Island, Balasore, Odisha</td>
        <td>20.75804°N 87.085533°E</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Kazakhstan</td>
        <td>Baikonur Cosmodrome, Tyuratam</td>
        <td>45.95515°N 63.35028°E</td>
        <td>1957-</td>
        <td>>1000</td>
        <td>2400000 kg </td>
        <td>Interplanetary</td>
        <td>First satellite, first human. Operated by Russia</td>
      </tr>
      <tr>
        <td>Kazakhstan</td>
        <td>Sary Shagan</td>
        <td>46.38000°N 72.87000°E</td>
        <td>1958-</td>
        <td>>1000</td>
        <td>2400000 kg</td>
        <td>Interplanetary</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Japan</td>
        <td>Akita Rocket Range</td>
        <td>39.57148°N 140.05785°E</td>
        <td>1956–1990</td>
        <td>81</td>
        <td>-</td>
        <td>343 km</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Indonesia</td>
        <td>Stasiun Peluncuran Roket, Pameungpeuk, Garut</td>
        <td>7.646643°S 107.689018°E</td>
        <td>1965–</td>
        <td>14+</td>
        <td>765 kg</td>
        <td>100 km</td>
        <td>-</td>
      </tr>
    </table>
  </div>
</div><br>
<button class="collapsible">EUROPE <br></button>
<div class="content">
  <div style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>Germany</td>
        <td>Peenemünde/Greifswalder Oie</td>
        <td>54.14300°N 13.79400°E</td>
        <td>1942–1945</td>
        <td>>3000 </td>
        <td>12 500 kg</td>
        <td>>100 km </td>
        <td>V-2 rockets during World War II, first rocket to reach space 20 June 1944</td>
      </tr>
      <tr>
        <td>Norway</td>
        <td>Andøya Space Center</td>
        <td>69.29430°N 16.02070°E</td>
        <td>1962–</td>
        <td>>1200 </td>
        <td>800 kg</td>
        <td>-</td>
        <td>Rockets to the upper atmosphere</td>
      </tr>
      <tr>
        <td>Indonesia</td>
        <td>Stasiun Peluncuran Roket, Pameungpeuk, Garut</td>
        <td>7.646643°S 107.689018°E</td>
        <td>1965–</td>
        <td>14+</td>
        <td>765 kg</td>
        <td>100 km</td>
        <td>-</td>
      </tr>
    </table>
  </div>
</div><br>
<button class="collapsible">NORTH AMERICA</button>
<div class="content">
  <div style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>Canada</td>
        <td>Churchill Rocket Research Range, Manitoba</td>
        <td>58.73430°N 93.82030°W</td>
        <td>1954–1998</td>
        <td>>3500</td>
        <td>-</td>
        <td>-</td>
        <td>Canadian Army</td>
      </tr>
      <tr>
        <td>United States</td>
        <td>White Sands Missile Range</td>
        <td>32.56460°N 106.35908°W</td>
        <td>1946–</td>
        <td>>7000</td>
        <td>-</td>
        <td>-</td>
        <td>Military and civilian flights. Served as alternate landing site for the space shuttle</td>
      </tr>
    </table>
  </div>
</div>
<button class="collapsible">SOUTH AMERICA</button>
<div class="content">
  <div style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>Brazil</td>
        <td>Natal/Barreira</td>
        <td>5.86600°S 35.38300°W</td>
        <td>1965–</td>
        <td>233</td>
        <td>-</td>
        <td>1100 km</td>
        <td>-</td>
      </tr>
      <tr>
        <td>France</td>
        <td>Guiana Space Centre, Kourou</td>
        <td>5.23739°N 52.76950°W</td>
        <td>1968–</td>
        <td> < 200</td>
        <td>777 000 kg</td>
        <td>Interplanetary</td>
        <td>Operated by CNES for ESA; launch base for Arianespace. Commercial and governmental launches.</td>
      </tr>
      <tr>
        <td>Argentina</td>
        <td>CELPA</td>
        <td>30.12737°S 66.34082°W</td>
        <td>1962–1974 / 2011–</td>
        <td>100 (approximately)</td>
        <td>933 kg</td>
        <td>550 km</td>
        <td>Military Launch Test Site (CITIDEF)</td>
      </tr>
    </table>
  </div>
</div>
<button class="collapsible">OCEANIA</button>
<div class="content">
  <div style="overflow-x:auto;">
    <table id="tab">
      <tr>
        <th>COUNTRY</th>
        <th>LOCATION</th>
        <th>COORDINATES</th>
        <th>OPERATIONAL DATES</th>
        <th>NUMBER OF ROCKET LAUNCHES</th>
        <th>HEAVIEST ROCKET LAUNCHED</th>
        <th>HIGHEST ACHIEVED ALTITUDE</th>
        <th>NOTES</th>
      </tr>
      <tr>
        <td>Australia</td>
        <td>Carnarvon</td>
        <td>24.48564°S 113.40866°E</td>
        <td>1964–1965</td>
        <td>12</td>
        <td>-</td>
        <td>120 km</td>
        <td>-</td>
      </tr>
    </table>
  </div>
</div>
</div><br><br><br>
<div class="container" >
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="http://spaceflight101.com/wp-content/uploads/2017/12/2017-Stats-1.jpg" style="width:500px" >
  <br>
</div>
<br>
</div>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 80%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

table a{
  color: blue;
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
<h2>Live Launches</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Spacecrafts</th>
    <th style="width:60%;">Watch Online</th>
  </tr>
  <tr>
    <td>Pegasus XL (ICON)</td>
    <td><a href="https://www.youtube.com/watch?v=wwMDvPCGeE0">Click To View
	</a>
	</td>
  </tr>
  <tr>
    <td>H-IIA | KhalifaSat & GOSAT-2</td>
    <td><a href="https://www.youtube.com/watch?v=OAyL0VCf_L4">Click To View</a>
	</td>
  </tr>
  <tr>
    <td>Delta IV Heavy | NROL-71</td>
    <td><a href="http://ulalaunch.com/webcast.aspx">Click To View
	</a></td>
  </tr>
  <tr>
    <td>Electron | It's Business Time</td>
    <td><a href="http://www.rocketlabusa.com/live-stream">Click To View
	</a>
	</td>
  </tr>
  <tr>
    <td>Falcon 9 Block 5 | Es'hail 2</td>
    <td><a href="https://www.youtube.com/c/spacex/live">Click To View
	</a>
	</td>
  </tr>
  <tr>
    <td>Atlas-5</td>
    <td><a href="https://youtu.be/wwMDvPCGeE0">Click To View</a>
	</td>
  </tr>
   <tr>
    <td>PSLV HySIS</td>
    <td>TO BE DECIDED
	</td>
  </tr>
   <tr>
    <td>Soyuz EgyptSat-A</td>
    <td>TO BE DECIDED
	</td>
  </tr>
   <tr>
    <td>Ariane-5</td>
    <td>TO BE DECIDED
	</td>
  </tr>
   <tr>
    <td>Antares NG-10</td>
    <td>TO BE DECIDED
	</td>
  </tr>
  
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>

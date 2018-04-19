<?php
   // echo "hello";
   include '../../config/rootconfig.php';
   include $root.'/lib/header/head.php';
   echo "<style>";
   include $root . '/lib/css/DispensLoc.css';
   echo "</style>";
   echo "</head>";
   echo "<body>";
   include $root.'/lib/Navigation/navigation.php';
 ?>
 <?php  
// echo "Location Page";
 ?>
 <div id="DispensLocbck"
	style="text-align: center; margin: auto; color: #888888; font-size: 20px; font-weight: bold">
	<table id="contacttbl">
		<tr>
			<td><img alt="Dispensary Locations 
"
				src="/img/DisLoc.png" /></td>
			<td><span style="color: white"><h1>Dispensary Locations 
</h1></span></td>
		</tr>
	</table>


	<table>
		<tr>
			<td valign="top">
			<div><label>Enter Zip Code, City or State</label></br>
    <input type="search" id="mySearch" name="q">
    <button>Search</button>
  </div>
			</td>
			<td>
      <iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBdAWAF4rwMdd-Nkk699fTIWLFk3-UZnDw
    &q=Windsor,Ontario,Canada" allowfullscreen>
</iframe>
  </iframe></td>
		</tr>
		
	</table>

</div>
 
 <?php 
 include $root.'/lib/footer/footer.php';
 echo "</body>";
 ?>
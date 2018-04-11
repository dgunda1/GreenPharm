<?php
// echo "hello";
include 'config/rootconfig.php';
include 'lib/header/head.php';
echo "<style>";
include 'lib/css/home.css';
echo "</style>";
echo "</head>";
echo "<body>";
include 'lib/Navigation/navigation.php';
?>
 <?php
// echo "Home Page";
?>
<div id="homebck"
	style="text-align: center; margin: auto; color: #888888; font-size: 30px; font-weight: bold">
	<span style="color: white"><h1>The Green Pharm</h1></span> <img
		alt="The Green Pharm" src="/img/logo.png" /> <span
		style="color: white">
		<p>Welcome to the pharm! We are here to help you find the perfect
			medication for you that is centered all around your personal needs</p>
	<p>Click anywhere to continue</p>
	</span>
</div>


<?php
include 'lib/footer/footer.php';
echo "</body>";
?>
    
<?php
// echo "hello";
include '../../config/rootconfig.php';
include $root . '/lib/header/head.php';
echo "<style>";
include $root . '/lib/css/cannabis.css';
echo "</style>";
echo "</head>";
echo "<body>";
include $root . '/lib/Navigation/navigation.php';
?>
 <?php
// echo "Cannabis Page";
?>
<div id="cannabibck"
	style="text-align: center; margin: auto; color: #888888; font-size: 20px; font-weight: bold">
	<table id="contacttbl">
		<tr>
			<td><img alt="Contact A Medical Cannabis Doctor"
				src="/img/wcannabis.png" /></td>
			<td><span style="color: white"><h1>What is Cannabis?</h1></span></td>
		</tr>
	</table>


	<table id="cannabisdata">
		<tr>
			<td><span style="color: white">THC</span></td>
			<td><span style="color: white"><p>Tetrahydrocannabinol is the most
						well-known cannabis-derived cannabinoid</p> </span></td>
			<td><span style="color: white">Pyschoactive Reduces stress &
					depression Appetite stimulant Dulls pain </span></td>
		</tr>
		<tr>
			<td><span style="color: white">CBD</span></td>
			<td><span style="color: white">Cannabidiol is non-psychoactive and
					widely accepted in therapy. </span></td>
			<td><span style="color: white">Prevents paranoia and schizophrenia
					Reduces short term memory loss Stops cancer from metastasizing
					Anti-inflammatory </span></td>
		</tr>
		<tr>
			<td><span style="color: white">CBN</span></td>
			<td><span style="color: white">Cannabinol is used as topical. It is
					the primary product of THC degradation. </span></td>
			<td><span style="color: white">Sleep Aid Pain relief Antibacterial
					Reduces ocular pressure </span></td>
		</tr>
		<tr>
			<td><span style="color: white">CBC</span></td>
			<td><span style="color: white">Cannabichromene works by interacting
					with the central nervous system’s proteins and spinal cord </span></td>
			<td><span style="color: white">Antifungal Pain reliever Stimulates
					bone growth </span></td>
		</tr>
		<tr>
			<td><span style="color: white">THCV</span></td>
			<td><span style="color: white">Tetrahydrocannabivarin strengths the
					psychoactive effects of THC. </span></td>
			<td><span style="color: white">Clear headed Energetic Anti=convulsive
			</span></td>
		</tr>
		<tr>
			<td><span style="color: white">CBG</span></td>
			<td><span style="color: white">Cannabigerol: Building block of
					cannabinoid and can only be found in trace amounts. </span></td>
			<td><span style="color: white">Anti-infammatory Reduces ocular
					pressure Relives stress </span></td>
		</tr>
	</table>

</div>
<?php
include $root . '/lib/footer/footer.php';
echo "</body>";
?>
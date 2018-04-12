<?php
include '../../config/rootconfig.php';
include $root . '/lib/header/head.php';
echo "<style>";
include $root . '/lib/css/administration.css';
echo "</style>";
echo "<body>";
include $root . '/lib/Navigation/navigation.php';
?>
 <?php
// echo "Admin Page";
?>
<div id="adminbck"
	style="text-align: center; margin: auto; color: #888888; font-size: 20px; font-weight: bold">
	<table id="contacttbl">
		<tr>
			<td><img alt="Administration" src="/img/admin.png" /></td>
			<td><span style="color: white"><h1>Administration</h1></span></td>
		</tr>
	</table>


	<table id="admindata">
		<tr>
			<td><span style="color: white">Administration Method </span></td>
			<td><span style="color: white">Overview </span></td>
			<td><span style="color: white">Onset of Effects </span></td>
			<td><span style="color: white">Peak of Effects </span></td>
			<td><span style="color: white">Duration of Effects </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Smoking</span></td>
			<td><span style="color: white">Least efficient consumption method,
					burns at high temperature, cannabinoids may be lost in the process
			</span></td>
			<td><span style="color: white">Instantly-15 minutes </span></td>
			<td><span style="color: white">15 minutes </span></td>
			<td><span style="color: white">2-3 hours </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Administration Method </span></td>
			<td><span style="color: white">Chat with a doctor! </span></td>
			<td><span style="color: white">Chat with a doctor! </span></td>
			<td><span style="color: white">Chat with a doctor! </span></td>
			<td><span style="color: white">Chat with a doctor! </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Vaporizing</span></td>
			<td><span style="color: white">Inhaling cannabis without burning it
					and only heats to dehydration to release cannabinoid </span></td>
			<td><span style="color: white">Instantly- 15 minutes </span></td>
			<td><span style="color: white">15 minutes </span></td>
			<td><span style="color: white">2-3 hours </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Oil Extracts </span></td>
			<td><span style="color: white">Fast acting, highly potent effects
					using solvents like butane, and propane. </span></td>
			<td><span style="color: white">Instantly </span></td>
			<td><span style="color: white">15 Minutes </span></td>
			<td><span style="color: white">2-4 hours </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Tincture/sprays </span></td>
			<td><span style="color: white">Potent liquid through the mucosal
					lining of the mouth by </span></td>
			<td><span style="color: white">15 minutes - 1 hour </span></td>
			<td><span style="color: white">90 minutes </span></td>
			<td><span style="color: white">4-6 hours </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Edibles</span></td>
			<td><span style="color: white">Cannabis infused foods or liquids that
					can be eaten </span></td>
			<td><span style="color: white">45 minutes - 2 hours </span></td>
			<td><span style="color: white">3 hours </span></td>
			<td><span style="color: white">4-10 hours </span></td>
		</tr>
		<tr>
			<td><span style="color: white">Topical</span></td>
			<td><span style="color: white">Cannabis infused fat-soluble
					substances like lotion and balms </span></td>
			<td><span style="color: white">Instantly- 15 minutes </span></td>
			<td><span style="color: white">2 hours </span></td>
			<td><span style="color: white">4-6 hours </span></td>
		</tr>
	</table>

</div>
<?php
include $root . '/lib/footer/footer.php';
echo "</body>";
?>
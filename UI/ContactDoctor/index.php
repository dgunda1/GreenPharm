<?php
// echo "hello";
include '../../config/rootconfig.php';
include $root . '/lib/header/head.php';
echo "<style>";
include $root . '/lib/css/contactdoctor.css';
echo "</style>";
echo "</head>";
echo "<body>";
include $root . '/lib/Navigation/navigation.php';
?>
 <?php
// echo "Contact Page";
?>
<div id="contactbck"
	style="text-align: center; margin: auto; color: #888888; font-size: 20px; font-weight: bold">
	<table id="contacttbl">
		<tr>
			<td><img alt="Contact A Medical Cannabis Doctor"
				src="/img/contact.png" /></td>
			<td><span style="color: white"><h1>Contact A Medical Cannabis Doctor</h1></span></td>
		</tr>
	</table>


	<table>
		<tr>
			<td><img alt="The Green Pharm" src="/img/chat.png" /></td>
		</tr>
		<tr>
			<td><span style="color: white">Chat with a doctor! </span></td>
		</tr>
		<tr>
			<td><img alt="The Green Pharm" src="/img/call.png" /></td>
		</tr>
		<tr>
			<td><span style="color: white">Call a doctor!
! </span></td>
		</tr>
	</table>

</div>

<?php
include $root . '/lib/footer/footer.php';
echo "</body>";
?>
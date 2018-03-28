<?php
/*
** Database Config File for PHP scripts
**
*/

//echo "Db Config";
?>
<?php
// if (session_id() == "") {
// 	session_start();
// }

//DB config params for Local GreenPharm
 $hostname='localhost';
 $username='green';
 $password='pharm@123';
 $dbname='greenpharm';
 
$mysqli = new mysqli($hostname,$username, $password,$dbname);

?>
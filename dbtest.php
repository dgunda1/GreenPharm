<?php
/*
 **
 ** Database Test
 **
 */
include('db/dbconfig.inc');
$error_message = "";
$counter = 0;
$mysqli = new mysqli($hostname,$username, $password,$dbname);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
/* return name of current default database */
if ($result = $mysqli->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}
$sql = "SELECT username, password, hint FROM testtable";
$result = $mysqli->query($sql);
$row_cnt = $result->num_rows;
?>
</br>
<?php 
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "username: " . $row["userid"]. " - password : " . $row["password"]. " -email: " . $row["email"]. "<br>";
	}
} else {
	echo "0 results";
}
$mysqli->close();
?> 
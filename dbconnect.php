<?php
$servername = "localhost";
$username = "root"; //"admin_root"; //"root"; //"chintan_wp67";
$password = '';//'C9gA$U#Ms4c$'; //"admin_mysql17916"; //"mysql"; //"2P!S6]92Vr";
$dbname = "Nagno"; //"admin_bdl"; //"bdl"; //"chintan_wp67";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
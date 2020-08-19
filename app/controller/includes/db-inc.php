<?php
//Server name
//$servername = "localhost";
$servername = "localhost:3308";
$dBUsername = "root";
//$dBPassword = "CMqmy3LAq44AV5";
$dBPassword = "";
$dBName = "harrisfauntleroy_db";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

<?php

// $servername ="localhost";
// $username = "id18373106_wachiuri97";
// $password = "%8S{1iV/+_rh/Ixt";
// $db = "id18373106_safarirally2022";




$servername ="localhost";
$username = "root";
$password = "";
$db = "safarirally";
// Create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));

// Check connection
if (!$mysqli) {
 die($mysqli->error);
}
?>
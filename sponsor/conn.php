<?php



$servername ="localhost";
$username = "yubuntut_paul";
$password = "paulo@2022";
$db = "yubuntut_safarirally";


// Create connection
$mysqli =new mysqli($servername, $username, $password,$db)or die(mysqli_error($mysqli));

// Check connection
if (!$mysqli) {
 die($mysqli->error);
}
?>
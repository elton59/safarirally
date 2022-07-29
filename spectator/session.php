<?php

   include('conn.php');
 

 

   $user_check = $_SESSION['spectator'];

   

   $sql = "select * from spectatordetails where email = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['spectator'])){

      header("location:../index.php");

      die();

   }

?>
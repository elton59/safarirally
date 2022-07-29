<?php

   include('conn.php');
 

 

   $user_check = $_SESSION['sponsor'];

   

   $sql = "select * from sponsordetails where email = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['sponsor'])){

      header("location:../index.php");

      die();

   }

?>
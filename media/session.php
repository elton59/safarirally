<?php

   include('conn.php');
 

 

   $user_check = $_SESSION['media'];

   

   $sql = "select * from mediadetails where email = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['media'])){

      header("location:../index.php");

      die();

   }

?>
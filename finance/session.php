<?php

   include('conn.php');
 

 

   $user_check = $_SESSION['finance'];

   

   $sql = "select * from finance where email = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['finance'])){

      header("location:../index.php");

      die();

   }

?>
<?php

   include('conn.php');
 

 
//logistics session
   $user_check = $_SESSION['logistics'];

   $sql = "select * from logistics where email = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $login_session = $row['email'];

   }

   if(!isset($_SESSION['logistics'])){

      header("location:../index.php");

      die();
      //admin

      $admin_check = $_SESSION['admin'];

      $sql = "select * from admin where email = '$admin_check' ";
   
      $ses_sql=mysqli_query($mysqli,$sql);
   
      
   
       while($row =$ses_sql->fetch_assoc())
   
       {   
   
      $admin_session = $row['email'];
   
      }
   
      if(!isset($_SESSION['admin'])){
   
         header("location:../index.php");
   
         die();
   

   }
   }
?>
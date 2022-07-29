<?php

   include('conn.php');
 

 

   $user_check = $_SESSION['recee'];

   

   $sql = "select * from team where racecarregistrationnumber = '$user_check' ";

   $ses_sql=mysqli_query($mysqli,$sql);

   

    while($row =$ses_sql->fetch_assoc())

    {   

   $recee_session = $row['racecarregistrationnumber'];
   

   }

 

?>
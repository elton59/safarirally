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

//scheduling events
if(isset($_POST['schev']))
{


   $evname=$_POST['evname'];
   $evspon=$_POST['evspon'];
   $evorg=$_POST['evorg'];
   $evdate=$_POST['evdate'];
   $evdue=$_POST['evdue'];
   $evven=$_POST['evven'];

        
          
           $sql=$mysqli->query("INSERT INTO eventdetail(eventname,sponsor,organizer,eventdate,duration,venue) VALUES('$evname','$evspon','$evorg','$evdate','$evdue','$evven')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewevents.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('scheduleevent.php');
           </script>";
   }
 }
 //update event
 if(isset($_POST['uschev']))
 {
   
  $upid=$_POST['upid'];
    $evschid=$_POST['evschid'];
    $evname=$_POST['evname'];
    $evid=$_POST['evid'];
    $evspon=$_POST['evspon'];
    $evorg=$_POST['evorg'];
    $evdate=$_POST['evdate'];
    $evdue=$_POST['evdue'];
    $evven=$_POST['evven'];
    $evnoc=$_POST['evnoc'];
    $evttno=$_POST['evttno'];
    $evawid=$_POST['evawid'];
 
         
           
            $sql=$mysqli->query("UPDATE eventdetail SET eventid='$evid',eventname='$evname',sponsor='$evspon',organizer='$evorg',eventdate='$evdate',duration='$evdue',venue='$evven',numberofcompetitors='$evnoc',teamtagnumber='$evttno',scheduleid='$evschid',awardid='$evawid' where id='$upid'") or die($mysqli->error);
            if($sql){
      
      echo "<script>alert('record Update successfully');
        window.location.replace('viewevents.php');
 
            </script>";
 
    }
    else
    {
      echo "<script><alert>(' failed');
            window.location.replace('editevents.php');
            </script>";
    }
  }
//delete event
if(isset($_GET['deleid']))
{
$id=$_GET['deleid'];
$sql=$mysqli->query("delete from eventdetail where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewevents.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editevents.php');
        </script>";
}
}	
//create fixures
if(isset($_POST['schef']))
{
   $schid=$_POST['schid'];
   $schrdate=$_POST['schrdate'];

   $schttno=$_POST['schttno'];
   $schstage=$_POST['schstage'];
   $schst=$_POST['schst'];
   $schfl=$_POST['schfl'];
   $schend=$_POST['schend'];
   $schevname=$_POST['schevname'];

           $sql=$mysqli->query("INSERT INTO schedule(schedueid,racedate,teamtagnumber,stage,startingpoint,fuellingpoint,endingpoint,eventname) VALUES('$schid','$schrdate','$schttno','$schstage','$schst','$schfl','$schend','$schevname')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewfixtures.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createfixtures.php');
           </script>";
   }
 }
 //edit fixures
if(isset($_POST['schefx']))
{
    $id=$_POST['id'];
   $schid=$_POST['schid'];
   $schrdate=$_POST['schrdate'];
   $schnop=$_POST['schnop'];
   $schttno=$_POST['schttno'];
   $schstage=$_POST['schstage'];
   $schst=$_POST['schst'];
   $schfl=$_POST['schfl'];
   $schend=$_POST['schend'];
 

           $sql=$mysqli->query("UPDATE  schedule SET schedueid='$schid',racedate='$schrdate',numberofparticipants='$schnop',teamtagnumber='$schttno',stage='$schstage',startingpoint='$schst',fuellingpoint='$schfl',endingpoint='$schend' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewfixtures.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editfixtures.php');
           </script>";
   }
 }
 //delete event
if(isset($_GET['delfxid']))
{
$id=$_GET['delfxid'];
$sql=$mysqli->query("delete from schedule where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewfixtures.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editfixtures.php');
        </script>";
}
}
//delete event
if(isset($_GET['apid']))
{
$id=$_GET['apid'];
$sql=$mysqli->query("update eventdetail set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('success');
    window.location.replace('viewevents.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editevents.php');
        </script>";
}
}
//Create Standings

if(isset($_POST['cst']))
{
  
  $stdate=$_POST['stdate'];
  $sttno=$_POST['sttno'];
  $steid=$_POST['steid'];
  $stpen=$_POST['stpen'];
  $strew=$_POST['strew'];
  $fid=$_POST['fid'];
  $evname=$_POST['evname'];

           $sql=$mysqli->query("INSERT INTO standings(standingdate,tagnumber,eventid,penalty,addpoint,fixtureid,eventname) VALUES('$stdate','$sttno','$steid','$stpen','$strew','$fid','$evname')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewstandings.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createstandings.php');
           </script>";
   }
 }

 //edit Standings
if(isset($_POST['ust']))
{
    $id=$_POST['id'];
    $stid=$_POST['stid'];
    $stdate=$_POST['stdate'];
    $sttno=$_POST['sttno'];
    $stdid=$_POST['stdid'];
    $stdname=$_POST['stdname'];
    $stcodname=$_POST['stcodname'];
    $stcot=$_POST['stcot'];
    $steid=$_POST['steid'];
    $stpen=$_POST['stpen'];
    $strew=$_POST['strew'];
    $stpoint=$_POST['stpoint'];
 

           $sql=$mysqli->query("UPDATE  standings SET standingid='$stid',standingdate='$stdate',tagnumber='$sttno',driverid='$stdid',drivername='$stdname',codrivername='$stcodname',eventid='$steid',penalty='$stpen',reward='$strew',points='$stpoint' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewstandings.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editstandings.php');
           </script>";
   }
 }

 //delete event
if(isset($_GET['delstid']))
{
$id=$_GET['delstid'];
$sql=$mysqli->query("delete from standings where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewstandings.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editstandings.php');
        </script>";
}
}

//Issue Award

if(isset($_POST['awd']))
{

  $awyr=$_POST['awyr'];
  $awename=$_POST['awename'];
  $awttno=$_POST['awttno'];
  $awdname=$_POST['awdname'];
  $awamount=$_POST['awamount'];
  $awcodname=$_POST['awcodname'];
  $awdname=$_POST['awdname'];
 

           $sql=$mysqli->query("INSERT INTO award(year,eventname,teamtagnumber,drivername,amount,codrivername) VALUES('$awyr','$awename','$awttno','$awdname','$awamount','$awcodname')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewawards.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createawards.php');
           </script>";
   }
 }

 //edit Award

if(isset($_POST['uawd']))
{
  $id=$_POST['id'];
  $awid=$_POST['awid'];
  $awyr=$_POST['awyr'];
  $awename=$_POST['awename'];
  $awttno=$_POST['awttno'];
  $awdname=$_POST['awdname'];
  $awamount=$_POST['awamount'];
  $awcodname=$_POST['awcodname'];
  $awdname=$_POST['awdname'];
 

           $sql=$mysqli->query(" UPDATE award SET awardid='$awid',year='$awyr',eventname='$awename',teamtagnumber='$awttno',drivername='$awdname',amount='$awamount',codrivername='$awcodname' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewawards.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editawards.php');
           </script>";
   }
 }
  //delete award
if(isset($_GET['delawid']))
{
$id=$_GET['delawid'];
$sql=$mysqli->query("delete from award where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewawards.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editawards.php');
        </script>";
}
}

//Create Service Parks

if(isset($_POST['asr']))
{
 
  $srp=$_POST['srp'];

  $sql=$mysqli->query("INSERT INTO providers(provider) VALUES('$srp')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewserviceparks.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createserviceparks.php');
           </script>";
   }
 }

 //edit Service Parks

if(isset($_POST['uasr']))
{
  $id=$_POST['id'];
  $srid=$_POST['srid'];
  $srp=$_POST['srp'];
  $srcr=$_POST['srcr'];
  $srttno=$_POST['srttno'];

  $sql=$mysqli->query("UPDATE  service SET serviceid='$srid',provider='$srp',racecarregistrationnumber='$srcr',teamtagnumber='$srttno' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record updated successfully');
       window.location.replace('viewserviceparks.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editserviceparks.php');
           </script>";
   }
 }

  //delete Service Parks
if(isset($_GET['delsrid']))
{
$id=$_GET['delsrid'];
$sql=$mysqli->query("delete from service where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewserviceparks.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editserviceparks.php');
        </script>";
}
}

//login logistics
session_start();
if(isset($_POST['login']))
   {
	$email=$_POST['email'];  
	$password=$_POST['password'];
	$result=$mysqli->query("SELECT * FROM logistics where email='$email' AND password='$password' and status='approved'") or die($mysqli->error);
	$row=$result->fetch_assoc();
	$count=mysqli_num_rows($result);
		  if($count==1)
	{
		$_SESSION['logistics']=$email;
		echo "<script>alert('login success')
			  location.replace('main.php');
			   </script>
			   ";
	}
	elseif($count!==1)
{
		echo "<script>alert('login Failed')
location.replace('index.php');
 </script>

		 ";
	}
}

//add logistics

if(isset($_POST['alog']))
{
  
  $logem=$_POST['logem'];
  $logpass=$_POST['logpass'];
  $sql=$mysqli->query("INSERT INTO logistics(email,password) VALUES('$logem','$logpass')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('index.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('index.php');
           </script>";
   }
 }


//edit feedback
if(isset($_POST['ufd']))
{
   $id=$_POST['id'];
   $fdemail=$_POST['fdemail'];
   $fdstatus=$_POST['fdstatus'];
   $fdreply=$_POST['fdreply'];
   $fddate=$_POST['fddate'];
   $fdmessage=$_POST['fdmessage'];
  
 

           $sql=$mysqli->query("UPDATE feedback SET email='$fdemail',message='$fdmessage',status='$fdstatus',reply='$fdreply',date='$fddate' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('feedback.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('feedback.php');
           </script>";
   }
 }
 //create feedback
if(isset($_POST['cfd']))
{
 
   $fdemail=$_POST['fdemail'];
   $fdmessage=$_POST['fdmessage'];
 ;
  
 

           $sql=$mysqli->query("INSERT INTO feedback (email,message) values('$fdemail','$fdmessage')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('feedback.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('feedback.php');
           </script>";
   }
 }

//feedbackbuttons

// sponsor approve button
if(isset($_GET['rfdid']))
{
$id=$_GET['rfdid'];
$sql=$mysqli->query("UPDATE  feedback set status='read' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('feedback.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('feedback.php');
       </script>";
}
}


?>

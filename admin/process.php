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

        
          
           $sql=$mysqli->query("INSERT INTO eventdetail(eventid,eventname,sponsor,organizer,eventdate,duration,venue,numberofcompetitors,teamtagnumber,scheduleid,awardid) VALUES('$evid','$evname','$evspon','$evorg','$evdate','$evdue','$evven','$evnoc','$evttno','$evschid','$evawid')") or die($mysqli->error);
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
   $schnop=$_POST['schnop'];
   $schttno=$_POST['schttno'];
   $schstage=$_POST['schstage'];
   $schst=$_POST['schst'];
   $schfl=$_POST['schfl'];
   $schend=$_POST['schend'];
 

           $sql=$mysqli->query("INSERT INTO schedule(schedueid,racedate,numberofparticipants,teamtagnumber,stage,startingpoint,fuellingpoint,endingpoint) VALUES('$schid','$schrdate','$schnop','$schttno','$schstage','$schst','$schfl','$schend')") or die($mysqli->error);
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
//Create Standings

if(isset($_POST['cst']))
{
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
 

           $sql=$mysqli->query("INSERT INTO standings(standingid,standingdate,tagnumber,driverid,drivername,codrivername,completiontime,eventid,penalty,reward,points) VALUES('$stid','$stdate','$sttno','$stdid','$stdname','$stcodname','$stcot','$steid','$stpen','$strew','$stpoint')") or die($mysqli->error);
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
  $awid=$_POST['awid'];
  $awyr=$_POST['awyr'];
  $awename=$_POST['awename'];
  $awttno=$_POST['awttno'];
  $awdname=$_POST['awdname'];
  $awamount=$_POST['awamount'];
  $awcodname=$_POST['awcodname'];
  $awdname=$_POST['awdname'];
 

           $sql=$mysqli->query("INSERT INTO award(awardid,year,eventname,teamtagnumber,drivername,amount,codrivername) VALUES('$awid','$awyr','$awename','$awttno','$awdname','$awamount','$awcodname')") or die($mysqli->error);
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
  $srid=$_POST['srid'];
  $srp=$_POST['srp'];
  $srcr=$_POST['srcr'];
  $srttno=$_POST['srttno'];
  $sql=$mysqli->query("INSERT INTO service(serviceid,provider,racecarregistrationnumber,teamtagnumber) VALUES('$srid','$srp','$srcr','$srttno')") or die($mysqli->error);
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

//login
session_start();
if(isset($_POST['login']))
   {
	$email=$_POST['email'];  
	$password=$_POST['password'];
	$result=$mysqli->query("SELECT * FROM admin where email='$email' AND password='$password'") or die($mysqli->error);
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
       window.location.replace('viewlogistics.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createlogistics.php');
           </script>";
   }
 }

//edit logitics
 

 if(isset($_POST['ealog']))
 {
   $id=$_POST['id'];
   $logem=$_POST['logem'];
   $logpass=$_POST['logpass'];
  
  
 
            $sql=$mysqli->query(" UPDATE logistics SET email='$logem',password='$logpass' where id='$id'") or die($mysqli->error);
            if($sql){
      
      echo "<script>alert('record Updated successfully');
        window.location.replace('viewlogistics.php');
 
            </script>";
 
    }
    else
    {
      echo "<script><alert>(' failed');
            window.location.replace('editlogistics.php');
            </script>";
    }
  }

   //delete logistics
if(isset($_GET['delloid']))
{
$id=$_GET['delloid'];
$sql=$mysqli->query("delete from logistics where id='$id'")or die($mysqli->error);

if($sql){
      
  echo "<script>alert('record deleted successfully');
    window.location.replace('viewlogistics.php');

        </script>";

}
else
{
  echo "<script><alert>(' failed');
        window.location.replace('editogistics.php');
        </script>";
}
}

//add Finance

if(isset($_POST['afin']))
{
  
  $finem=$_POST['finem'];
  $finpass=$_POST['finpass'];
  $sql=$mysqli->query("INSERT INTO finance(email,password) VALUES('$finem','$finpass')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewfinance.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createfinance.php');
           </script>";
   }
 }

//edit finance
 

if(isset($_POST['eafi']))
{
  $id=$_POST['id'];
  $finem=$_POST['finem'];
  $finpass=$_POST['finpass'];
 
 

           $sql=$mysqli->query(" UPDATE finance SET email='$finem',password='$finpass' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewfinance.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editfinance.php');
           </script>";
   }
 }

  //delete finance
if(isset($_GET['delfinid']))
{
$id=$_GET['definid'];
$sql=$mysqli->query("delete from finance where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewfinance.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editogistics.php');
       </script>";
}
}
//add Driver

if(isset($_POST['adr']))
{
  
  $drid=$_POST['drid'];
  $drname=$_POST['drname'];
  $drlno=$_POST['drlno'];
  $drnat=$_POST['drnat'];
  $drcodid=$_POST['drcodid'];
  $drspon=$_POST['drspon'];
  $dremail=$_POST['dremail'];
  $drpass=$_POST['drpass'];
  $sql=$mysqli->query("INSERT INTO driverdetails(driverid,fullname,lincensenumber,nationality,codriverid,sponsorid,email,password) VALUES('$drid','$drname','$drlno','$drnat','$drcodid','$drspon','$dremail','$drpass')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewdrivers.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createdrivers.php');
           </script>";
   }
 }

//edit Driver
if(isset($_POST['uadr']))
{
  $id=$_POST['id'];
  $drid=$_POST['drid'];
  $drname=$_POST['drname'];
  $drlno=$_POST['drlno'];
  $drnat=$_POST['drnat'];
  $drcodid=$_POST['drcodid'];
  $drspon=$_POST['drspon'];
  $dremail=$_POST['dremail'];
  $drpass=$_POST['drpass'];

 
 

           $sql=$mysqli->query(" UPDATE driverdetails SET driverid='$drid',fullname='$drname',lincensenumber='$drlno',nationality='$drnat',codriverid='$drcodid',sponsorid='$drspon',email='$dremail',password='$drpass' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewdrivers.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editdrivers.php');
           </script>";
   }
 }

  //delete driver
if(isset($_GET['deldrid']))
{
$id=$_GET['dedrid'];
$sql=$mysqli->query("delete from driverdetails where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewdrivers.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editogistics.php');
       </script>";
}
}
//add Sponsor

if(isset($_POST['adsp']))
{
  
  $spid=$_POST['spid'];
  $spname=$_POST['spname'];
  $sptid=$_POST['sptid'];
  $spemail=$_POST['spemail'];
  $sppass=$_POST['sppass'];
  $sql=$mysqli->query("INSERT INTO sponsordetails(sponsorid,sponsorname,teamid,email,password) VALUES('$spid','$spname','$sptid','$spemail','$sppass')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewsponsors.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createsponsors.php');
           </script>";
   }
 }
 
//edit Sponsor
if(isset($_POST['uadsp']))
{
  $id=$_POST['id'];
  $spid=$_POST['spid'];
  $spname=$_POST['spname'];
  $sptid=$_POST['sptid'];
  $spemail=$_POST['spemail'];
  $sppass=$_POST['sppass'];
 
 

           $sql=$mysqli->query(" UPDATE sponsordetails SET sponsorid='$spid',sponsorname='$spname',teamid='$sptid',email='$spemail',password='$sppass' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewsponsors.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editsponsors.php');
           </script>";
   }
 }

  //delete Sponsor
if(isset($_GET['delspid']))
{
$id=$_GET['delspid'];
$sql=$mysqli->query("delete from sponsordetails where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewsponsors.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editsponsors.php');
       </script>";
}
}
//add Media

if(isset($_POST['adm']))
{
  
  $mid=$_POST['mid'];
  $mname=$_POST['mname'];
  $mcat=$_POST['mcat'];
  $memail=$_POST['memail'];
  $mpass=$_POST['mpass'];
  $mcont=$_POST['mcont'];
  $mpay=$_POST['mpay'];
  $sql=$mysqli->query("INSERT INTO mediadetails(mediaid,fullname,category,email,password,contact,paymentid) VALUES('$mid','$mname','$mcat','$memail','$mpass','$mcont','$mpay')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewmedia.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createmedia.php');
           </script>";
   }
 }

 //edit Media

if(isset($_POST['uadm']))
{
  $id=$_POST['id'];
  $mid=$_POST['mid'];
  $mname=$_POST['mname'];
  $mcat=$_POST['mcat'];
  $memail=$_POST['memail'];
  $mpass=$_POST['mpass'];
  $mcont=$_POST['mcont'];
  $mpay=$_POST['mpay'];
  $sql=$mysqli->query("UPDATE mediadetails SET mediaid='$mid',fullname='$mname',category='$mcat',email='$memail',password='$mpass',contact='$mcont',paymentid='$mpay'where id='$id' ") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewmedia.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editmedia.php');
           </script>";
   }
 }
  //delete Media
if(isset($_GET['delmid']))
{
$id=$_GET['delmid'];
$sql=$mysqli->query("delete from mediadetails where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewmedia.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editmedia.php');
       </script>";
}
}
//add Spectator
if(isset($_POST['adspec']))
{
  
  $specname=$_POST['specname'];
  $specnat=$_POST['specnat'];
  $specemail=$_POST['specemail'];
  $specpass=$_POST['specpass'];
 $specgen=$_POST['specgen'];
  $sql=$mysqli->query("INSERT INTO spectatordetails(name,nationality,email,gender,password) VALUES('$specname ','$specnat','$specemail','$specgen','$specpass')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewspectators.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('createspectators.php');
           </script>";
   }
 }

 //edit Spectator
if(isset($_POST['uadspec']))
{
  $id=$_POST['id'];
  $specname=$_POST['specname'];
  $specnat=$_POST['specnat'];
  $specemail=$_POST['specemail'];
  $specpass=$_POST['specpass'];
  $specgen=$_POST['specgen'];
  $sql=$mysqli->query("UPDATE spectatordetails SET name='$specname',nationality='$specnat',email='$specemail',gender='$specgen',password='$specpass' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewspectators.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editspectators.php');
           </script>";
   }
 }
  //delete Sponsor
if(isset($_GET['delspecid']))
{
$id=$_GET['delspecid'];
$sql=$mysqli->query("delete from spectatordetails where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewspectators.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editspectators.php');
       </script>";
}
}
//add teams

if(isset($_POST['adtm']))
{

  $tmid=$_POST['tmid'];
  $tmtno=$_POST['tmtno'];
  $tmdname=$_POST['tmdname'];
  $tmcodname=$_POST['tmcodname'];
  $tmrcno=$_POST['tmrcno'];
  $tmpid=$_POST['tmpid'];
  
 

           $sql=$mysqli->query("INSERT INTO team(teamid,tagnumber,drivername,codrivername,racecarregistrationnumber,paymentid)VALUES('$tmid','$tmtno','$tmdname','$tmcodname','$tmrcno','$tmpid')") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record added successfully');
       window.location.replace('viewteams.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editteams.php');
           </script>";
   }
 }

 //edit teams

if(isset($_POST['uadtm']))
{
  $id=$_POST['id'];
  $tmid=$_POST['tmid'];
  $tmtno=$_POST['tmtno'];
  $tmdname=$_POST['tmdname'];
  $tmcodname=$_POST['tmcodname'];
  $tmrcno=$_POST['tmrcno'];
  
  
 

           $sql=$mysqli->query("UPDATE team SET teamid='$tmid',drivername='$tmdname',tagnumber='$tmtno',codrivername='$tmcodname',racecarregistrationnumber='$tmrcno' where id='$id'") or die($mysqli->error);
           if($sql){
     
     echo "<script>alert('record Updated successfully');
       window.location.replace('viewteams.php');

           </script>";

   }
   else
   {
     echo "<script><alert>(' failed');
           window.location.replace('editteams.php');
           </script>";
   }
 }
//delete teams
if(isset($_GET['deltmid']))
{
$id=$_GET['deltmid'];
$sql=$mysqli->query("delete from teamdetails where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('record deleted successfully');
   window.location.replace('viewteams.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('editteams.php');
       </script>";
}
}
 /* ######################Buttons############*/

// driver approve button
if(isset($_GET['adrbuttid']))
{
$id=$_GET['adrbuttid'];
$sql=$mysqli->query("UPDATE  driverdetails set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewdrivers.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewdrivers.php');
       </script>";
}
}
// driver reject button
if(isset($_GET['rjdrbuttid']))
{
$id=$_GET['rjdrbuttid'];
$sql=$mysqli->query("UPDATE  driverdetails set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewdrivers.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewpayments.php');
       </script>";
}
}

// finance approve button
if(isset($_GET['afinbuttid']))
{
$id=$_GET['afinbuttid'];
$sql=$mysqli->query("UPDATE  finance set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewfinance.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewdrivers.php');
       </script>";
}
}
// finance reject button
if(isset($_GET['rjfinbuttid']))
{
$id=$_GET['rjfinbuttid'];
$sql=$mysqli->query("UPDATE  finance set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewfinance.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewfinance.php');
       </script>";
}
}
// logistics approve button
if(isset($_GET['alogbuttid']))
{
$id=$_GET['alogbuttid'];
$sql=$mysqli->query("UPDATE  logistics set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewlogistics.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewlogistics.php');
       </script>";
}
}
// logistics reject button
if(isset($_GET['rlogbuttid']))
{
$id=$_GET['rlogbuttid'];
$sql=$mysqli->query("UPDATE  logistics set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewlogistics.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewlogistics.php');
       </script>";
}
}
// media approve button
if(isset($_GET['ambuttid']))
{
$id=$_GET['ambuttid'];
$sql=$mysqli->query("UPDATE  mediadetails set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewmedia.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewmedia.php');
       </script>";
}
}
// media reject button
if(isset($_GET['rmbuttid']))
{
$id=$_GET['rmbuttid'];
$sql=$mysqli->query("UPDATE  mediadetails set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewmedia.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewlogistics.php');
       </script>";
}
}
// spectator approve button
if(isset($_GET['asbuttid']))
{
$id=$_GET['asbuttid'];
$sql=$mysqli->query("UPDATE  spectatordetails set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewspectators.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewspectators.php');
       </script>";
}
}
// spectator reject button
if(isset($_GET['rsbuttid']))
{
$id=$_GET['rsbuttid'];
$sql=$mysqli->query("UPDATE  spectatordetails set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewspectators.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewspectators.php');
       </script>";
}
}
// sponsor approve button
if(isset($_GET['aspbuttid']))
{
$id=$_GET['aspbuttid'];
$sql=$mysqli->query("UPDATE  sponsordetails set status='approved' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewsponsors.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewsponsors.php');
       </script>";
}
}
// sponsor reject button
if(isset($_GET['rspbuttid']))
{
$id=$_GET['rspbuttid'];
$sql=$mysqli->query("UPDATE  sponsordetails set status='rejected' where id='$id'")or die($mysqli->error);

if($sql){
     
 echo "<script>alert('success');
   window.location.replace('viewsponsors.php');

       </script>";

}
else
{
 echo "<script><alert>(' failed');
       window.location.replace('viewsponsors.php');
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
if (isset($_POST['cfd'])) {
  $fdremail = $_POST['fdremail'];
  $fdsemail = $_POST['fdsemail'];
  $fdmessage = $_POST['fdmessage'];;



  $sql = $mysqli->query("INSERT INTO feedback (receiver,email,message) values('$fdsemail','$fdremail','$fdmessage')") or die($mysqli->error);
  if ($sql) {

    echo "<script>alert('record added successfully');
       window.location.replace('sentbox.php');

           </script>";
  } else {
    echo "<script><alert>(' failed');
           window.location.replace('createfeedback.php');
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

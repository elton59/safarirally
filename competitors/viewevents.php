<?php
include("conn.php");
include("header.php");
include("sidebar.php");
include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>view Events</title>

  <!-- Bootstrap CSS -->
<link href="../logistics/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../logistics/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../logistics/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../logistics/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../logistics/css/style.css" rel="stylesheet">
  <link href="../logistics/css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Events</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="main.php">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
               Available events Events
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                   
                    <th>EventName</th>
                    <th>Sponsor</th>
                    <th>Organizer</th>
                    <th>StartDate</th>
                    <th>Venue</th>
                    <th>EndDate</th>
                    <th>Duration</th>  
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where status='approved'")or die($mysqli->error);
                  $result2=$mysqli->query("select * from eventdetail where  driver_email='$login_session'  and payment_status!='nopay'")or die($mysqli->error);
                  while($row2=$result2->fetch_assoc())
                  {
                    $status2=$row2['status'];
                    $_SESSION['status2']=$status2;
                  }
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                  
                    <td>".$row['eventname']."</td>
                    <td>".$row['sponsor']."</td>
                    <td>".$row['organizer']."</td>
                    <td>".$row['eventdate']."</td>
                    <td>".$row['venue']."</td>
                    <td>".$row['duration']."</td>
                    <td>".$row['nduration']."</td>
                   
                    <td>".$status2."</td>
                    <td> <a href='bookevent.php?bpid=$row[id]' class='btn btn-success' >Book</a>
                   </td>
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
                //book event
if (isset($_GET['bpid'])) {
  $email=$login_session;
  $result=$mysqli->query("select * from team where driver_email='$email'")or die($mysqli->error);
  while($row=$result->fetch_assoc())
  {
  $dfname=$row['drivername'];
  $dlname=$row['codrivername'];
  $ttno=$row['teamtagnumber'];
  $id = $_GET['bpid'];
  $sql = $mysqli->query("update  eventdetail set status='booked',drivername='$dfname',teamtagnumber='$ttno',codrivername='$dlname' where id='$id'") or die($mysqli->error);
  if($sql)
  {
    echo"<script>window.location.replace('bookevent.php')</script>";
  }
  }


}?>

              </table>
              <a href="available_events_report.php?apapsid=<?php echo $login_session;?>"  button class="btn btn-success 
                                ">Download</a></td>
                  </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
               Events yet to be paid for
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                 
                    <th>EventName</th>
                    <th>Sponsor</th>
                    <th>Organizer</th>
                    <th>StartDate</th>
                    <th>Venue</th>
                    <th>EndDate</th>
                    <th>Duration</th>
                  
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where  driver_email='$login_session' and status='booked' and payment_status='nopay'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                  
                    <td>".$row['eventname']."</td>
                    <td>".$row['sponsor']."</td>
                    <td>".$row['organizer']."</td>
                    <td>".$row['eventdate']."</td>
                    <td>".$row['venue']."</td>
                    <td>".$row['duration']."</td>
                    <td>".$row['nduration']."</td>
                   
                    <td>".$row['status']."</td>
                    <td> <a href='createpayments.php?bpid=$row[id]' class='btn btn-success' >Pay</a>
                   </td>
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
                //book event
if (isset($_GET['bpid'])) {
  $email=$login_session;
  $result=$mysqli->query("select * from team where driver_email='$email'")or die($mysqli->error);
  while($row=$result->fetch_assoc())
  {
  $dfname=$row['drivername'];
  $dlname=$row['codrivername'];
  $ttno=$row['teamtagnumber'];
  $id = $_GET['bpid'];
  $sql = $mysqli->query("update  eventdetail set status='booked',drivername='$dfname',teamtagnumber='$ttno',codrivername='$dlname' where id='$id'") or die($mysqli->error);
  if($sql)
  {
    echo"<script>window.location.replace('bookevent.php')</script>";
  }
  }


}?>

              </table>
              <a href="nopay_events_reports.php?apapsid=<?php echo $login_session;?>"  button class="btn btn-success 
                                ">Download</a>
                  </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
               Booked Events
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                 
                    <th>EventName</th>
                    <th>Sponsor</th>
                    <th>Organizer</th>
                    <th>StartDate</th>
                    <th>Venue</th>
                    <th>EndDate</th>
                    <th>Duration</th>
                  <th>Driver Name</th>
                  <th>Co Driver Name</th>
                  <th>Team Tag No</th>
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where  driver_email='$login_session' and status='booked' and payment_status!='nopay'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                   
                    <td>".$row['eventname']."</td>
                    <td>".$row['sponsor']."</td>
                    <td>".$row['organizer']."</td>
                    <td>".$row['eventdate']."</td>
                    <td>".$row['venue']."</td>
                    <td>".$row['duration']."</td>
                    <td>".$row['nduration']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['codrivername']."</td>
                    <td>".$row['teamtagnumber']."</td>
                    <td>".$row['payment_status']."</td>
                   
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
                //book event
if (isset($_GET['bpid'])) {
  $email=$login_session;
  $result=$mysqli->query("select * from team where driver_email='$email'")or die($mysqli->error);
  while($row=$result->fetch_assoc())
  {
  $dfname=$row['drivername'];
  $dlname=$row['codrivername'];
  $ttno=$row['teamtagnumber'];
  $id = $_GET['bpid'];
  $sql = $mysqli->query("update  eventdetail set status='booked',drivername='$dfname',teamtagnumber='$ttno',codrivername='$dlname' where id='$id'") or die($mysqli->error);
  if($sql)
  {
    echo"<script>window.location.replace('bookevent.php')</script>";
  }
  }


}?>

              </table>
              <a href="booked_events_report.php?apapsid=<?php echo $login_session;?>"  button class="btn btn-success 
                                ">Download</a>
                  </div>
            </section>
          </div>
        </div>
       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://paul waweru.com/license/
            Purchase the pro version form: https://paul waweru.com/buy/?theme=NiceAdmin
          -->
          &copy <a href="https://paul waweru.com/">paul waweru</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
   <!-- javascripts -->
   <script src="../logistics/js/jquery.js"></script>
  <script src="../logistics/js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="../logistics/js/jquery.scrollTo.min.js"></script>
  <script src="../logistics/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="../logistics/js/scripts.js"></script>

  <script type="text/javascript">

function fnExcelReport()

{

 var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";

 var textRange; var j=0;

 tab = document.getElementById('events'); // id of table



 for(j = 0 ; j < tab.rows.length ; j++) 

 {     

     tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";

     //tab_text=tab_text+"</tr>";

 }



 tab_text=tab_text+"</table>";

 tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table

 tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table

 tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params



 var ua = window.navigator.userAgent;

 var msie = ua.indexOf("MSIE "); 



 if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer

 {

     txtArea1.document.open("txt/html","replace");

     txtArea1.document.write(tab_text);

     txtArea1.document.close();

     txtArea1.focus(); 

     sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");

 }  

 else                 //other browser not tested on IE 11

     sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  



 return (sa);

}

</script>


</body>

</html>

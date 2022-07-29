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

  <title>view Payments</title>

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

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://paul waweru.com/nice-admin-bootstrap-admin-html-template/
      Author: paul waweru
      Author URL: https://paul waweru.com
    ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Payments</h3>
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
              Pending Payments
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Account Name</th>
                    <th>Driver Email</th>
                    <th>Payment Date</th>
                    <th>Transaction <i class="fa fa-id-badge" aria-hidden="true"></i></th>
                    <th>Amount</th>
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where driver_email !='noinput' and payment_status='payment_pending' ")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['driver_email']."</td>
                    <td>".$row['payment_date']."</td>
                    <td>".$row['transaction_id']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['payment_status']."</td>
                      <td> <a href='viewpayments.php?bpid=$row[id]' class='btn btn-success' >Approve</a>
                     </td>
                     <td> <a href='viewpayments.php?rbpid=$row[id]' class='btn btn-danger' >Reject</a>
                     </td>
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
              
                //book event
if (isset($_GET['bpid'])) {
  $id=$_GET['bpid'];
  $a='payment_approved';
 
  $result=$mysqli->query("update eventdetail set payment_status='$a' where id='$id'")or die($mysqli->error);
  
    echo"<script>window.location.replace('viewpayments.php')</script>";
  }
  if (isset($_GET['rbpid'])) {
    $b='payment_rejected';
    $id=$_GET['rbpid'];
    $result=$mysqli->query("update eventdetail set payment_status='$b' where id='$id'")or die($mysqli->error);
    
      echo"<script>window.location.replace('viewpayments.php')</script>";
    }


?>

              </table>
              <button onclick="fnExcelReport()" class="btn btn-success">download</button>
                  </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
              View Approved Payments
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Account Name</th>
                    <th>Driver Email</th>
                    <th>Payment Date</th>
                    <th>Transaction <i class="fa fa-id-badge" aria-hidden="true"></i></th>
                    <th>Amount</th>
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where driver_email !='noinput' and payment_status='payment_approved'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['driver_email']."</td>
                    <td>".$row['payment_date']."</td>
                    <td>".$row['transaction_id']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['payment_status']."</td>
                    
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
              
                //book event
if (isset($_GET['bpid'])) {
  $id=$_GET['bpid'];
  $a='payment_approved';
 
  $result=$mysqli->query("update eventdetail set payment_status='$a' where id='$id'")or die($mysqli->error);
  
    echo"<script>window.location.replace('viewpayments.php')</script>";
  }
  if (isset($_GET['rbpid'])) {
    $b='payment_rejected';
    $id=$_GET['rbpid'];
    $result=$mysqli->query("update eventdetail set payment_status='$b' where id='$id'")or die($mysqli->error);
    
      echo"<script>window.location.replace('viewpayments.php')</script>";
    }


?>

              </table>
              <button onclick="fnExcelReport()" class="btn btn-success">download</button>
                  </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
              Rejected Payments
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered" id="events">
                <thead>
                  <tr>
                  <th>ID</th>
                    <th>Account Name</th>
                    <th>Driver Email</th>
                    <th>Payment Date</th>
                    <th>Transaction <i class="fa fa-id-badge" aria-hidden="true"></i></th>
                    <th>Amount</th>
                    <th>Status</th>
         
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail where driver_email !='noinput' and payment_status='payment_rejected'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['id']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['driver_email']."</td>
                    <td>".$row['payment_date']."</td>
                    <td>".$row['transaction_id']."</td>
                    <td>".$row['amount']."</td>
                    <td>".$row['payment_status']."</td>
                   
                   </tbody>
                    "
                  ;}
            ?>
                </tbody>
                <?php
              
                //book event
if (isset($_GET['bpid'])) {
  $id=$_GET['bpid'];
  $a='payment_approved';
 
  $result=$mysqli->query("update eventdetail set payment_status='$a' where id='$id'")or die($mysqli->error);
  
    echo"<script>window.location.replace('viewpayments.php')</script>";
  }
  if (isset($_GET['rbpid'])) {
    $b='payment_rejected';
    $id=$_GET['rbpid'];
    $result=$mysqli->query("update eventdetail set payment_status='$b' where id='$id'")or die($mysqli->error);
    
      echo"<script>window.location.replace('viewpayments.php')</script>";
    }


?>

              </table>
              <button onclick="fnExcelReport()" class="btn btn-success">download</button>
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

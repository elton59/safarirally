<?php
include("conn.php");
include("header.php");
include("sidebar.php");
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

  <title>Edit Payments</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Payments</h3>
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
                Edit Payments
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>TransactionID</th>
                    <th>AccountName</th>
                    <th>AmountPaid</th>
                    <th>PaymentFor</th>
                    <th>UserCategory</th>
                    <th>PaymentDate</th>
                    <th>Statud</th>
                   
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                 $sunguch=$login_session;
                  $result=$mysqli->query("select * from paymentdetails where accountname='$sunguch'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['transactiontid']."</td>
                    <td>".$row['accountname']."</td>
                    <td>".$row['amountpaid']."</td>
                    <td>".$row['paymentfor']."</td>
                    <td>".$row['usercategory']."</td>
                    <td>".$row['paymentdate']."</td>
                    <td>".$row['status']."</td>
 
                    <td> <a href='editpayments.php?apayid=$row[id]' class='btn btn-primary' >Edit<a>
                   <a href='process.php? delpayid=$row[id]' class='btn btn-danger'>Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apayid']))
{
   $id=$_GET['apayid'];
  $result=$mysqli->query("select * from paymentdetails where id=$id")or die($mysqli->error);
   $row=$result->fetch_array();
   $ptrid= $row['transactiontid'];
   $pname=$row['accountname'];
   $ppf=$row['paymentfor'];
   $puc=$row['usercategory'];
   $pamount=$row['amountpaid'];
  
   
   
               

    echo "success";
    
}
else
{
    echo "record will be displayed here";
}

?>
 <div class="form-group" >
 
 <form class="form-horizontal " method="POST" action="process.php">
               <P>Payments are as follows:<br/>
               Accomodation :- Ksh 15000 per individual <br/>
               competitors Ragistration :- Ksh 75000 per team  <br/>
               spectators Registration :-Ksh 12000 per individual <br/>
               <input  name="id"type="hidden" class="form-control round-input"  value='<?php echo $id; ?>'>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Transaction ID</label>
                    <div class="col-sm-10">
                      <input  name="ptrid"type="text" class="form-control round-input" placeholder="input TransactionID" value='<?php echo $ptrid; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Account Name</label>
                    <div class="col-sm-10">
                      <input name="pname" type="text" class="form-control round-input" placeholder="input Account Name" value='<?php echo $login_session ?>' readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Amount Paid</label>
                    <div class="col-sm-10">
                      <input name="pamount" type="text" class="form-control round-input" placeholder="Amount Paid" value='<?php echo $pamount; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Payment For</label>
                    <div class="col-sm-10">
                      <input name="ppf"  class="form-control round-input"  value='<?php echo $ppf; ?>'>
                        
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">User Category</label>
                    <div class="col-sm-10">
                      <input name="puc" type="text" class="form-control round-input" value="driver" readonly>
                    </div>
                  </div>
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uadpay" value="Update"/>
                   <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
                </form>
                     
        </div>
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


</body>

</html>


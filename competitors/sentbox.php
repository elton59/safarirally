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

  <title>Feedback</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Feedback</h3>
            <ol class="breadcrumb">
              <li><i></i><a href="createfeedback.php">Compose Message</a></li>
              <li><i></i><a href="feedback.php">Inbox</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
              Sent Box
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>Sent To</th>
                    
                    <th>message</th>
                    <th>Date</th>
                   
                   
                  </tr>
                </thead>
                <tbody>
              
                <?php
                  $feed=$login_session;
                  $result=$mysqli->query("select * from feedback  where email='$feed'")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['receiver']."</td>
                  
                    <td>".$row['message']."</td>
                   
                    <td>".$row['date']."</td>
                  
                   
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apfdid']))
{
  $id=$_GET['apfdid'];
  $result=$mysqli->query("select * from feedback where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
   $fdemail= $row['email'];
   $fdstatus=$row['status'];
   $fdreply=$row['reply'];
   $fddate=$row['date'];
   $fdmessage=$row['message'];

   
                

    echo "success";
    
}


?>
 <div class="form-group" >
 <!-- <form class="form-horizontal " method="POST" action="process.php">
 <input  name="id"type="hidden" class="form-control round-input"  value='<?php echo $id; ?>'>

               <div class="form-group">
                 <label class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                   <input  name="fdemail"type="text" class="form-control round-input" placeholder="input email" value='<?php echo $fdemail; ?>' readonly>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Message</label>
                 <div class="col-sm-10">
                   <input name="fdmessage" type="text" class="form-control round-input" placeholder="input Message" value='<?php echo $fdmessage; ?>' readonly>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Status</label>
                 <div class="col-sm-10">
                   <input name="fdstatus" type="text" class="form-control round-input" placeholder="input status" value='read' readonly>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Reply</label>
                 <div class="col-sm-10">
                   <input name="fdreply" type="text" class="form-control round-input" placeholder="input reply" value='<?php echo $fdreply; ?>' >
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Date</label>
                 <div class="col-sm-10">
                   <input name="fddate" type="text" class="form-control round-input" placeholder="input Driver date" value='<?php echo $fddate; ?>' readonly>
                 </div>
               </div>
               
             
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="ufd" value="Send"/>
                <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
             </form>                         -->


                     
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


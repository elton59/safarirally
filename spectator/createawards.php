<?php
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

  <title> Issue Awards</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/daterangepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
  <link href="css/bootstrap-colorpicker.css" rel="stylesheet" />
  <!-- date picker -->

  <!-- color picker -->

  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

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
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Issue Awards</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            
            </ol>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
              <section class="panel">
                <header class="panel-heading">
                  Standings
                </header>
                <div class="table-responsive">
                <table class="table-responsive table table-bordered" id="standing"> 
                  <thead>
                    <tr>
                      <th>StandingID</th>
                      <th>StandingDate</th>
                      <th>TagNumber</th>
                      <th>Driver</th>
                      <th>CoDriverName</th>
                      <th>Penalty</th>
                      <th>Rewards</th>
                      <th>Points</th>
                     
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                  $totalpoints=$mysqli->query("SELECT SUM(reward) AS totalpoints FROM standings group by tagnumber");
                  while($row2=$totalpoints->fetch_assoc())
                  {
                    $zae=$row2['totalpoints'];
                  }
                  ;
                    $result=$mysqli->query("SELECT standings.*,team.drivername,team.codrivername
                    FROM standings  JOIN team ON team.teamtagnumber=standings.tagnumber  order by standings.eventid")or die($mysqli->error);
                    while($row=$result->fetch_assoc())
                    {
                      echo

                      "
                      <tbody>
                      <td>".$row['id']."</td>
                      <td>".$row['standingdate']."</td>
                      <td>".$row['tagnumber']."</td>
                      <td>".$row['drivername']."</td>
                      <td>".$row['codrivername']."</td>
                      <td>".$row['addpoint']."</td>
                      <td>".$row['penalty']."</td>
                      <td>".$row['reward']."</td>
                   
                   
                    
                    </tbody>
                      "
                    ;}
              ?>
      
                </table>
                <button onclick="fnExcelReport()" class="btn btn-success">download</button>
                    </div>
              </section>
            </div>
          </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
            Issue Awards
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="POST" action="process.php">
               
                  <div class="form-group">
                    <label class="col-sm-2 control-label">AwardID</label>
                    <div class="col-sm-10">
                      <input  name="awid"type="text" class="form-control round-input" placeholder="input Award ID">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Year</label>
                    <div class="col-sm-10">
                      <input name="awyr" type="year" class="form-control round-input" placeholder="input  Year">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Event Name</label>
                    <div class="col-sm-10">
                      <input name="awename" type="text" class="form-control round-input" placeholder="input  Event Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TeamTagNUmber</label>
                    <div class="col-sm-10">
                      <input  name="awttno" type="text" class="form-control round-input" placeholder="input TeamTagNUmber">
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">DriverName</label>
                    <div class="col-sm-10">
                      <input  name="awdname" type="text" class="form-control round-input" placeholder="input  DriverName">
                    </div>
</div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">CoDriverName</label>
                    <div class="col-sm-10">
                      <input  name="awcodname" type="text" class="form-control round-input" placeholder="input  CoDriverName">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Amount </label>
                    <div class="col-sm-10">
                      <input  name="awamount" type="text" class="form-control round-input" placeholder="input  Amount">
                    </div>
                  </div>
                
                
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="awd" value="Issue"/>
                   <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
                </form>
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
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>

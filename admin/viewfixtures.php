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

  <title>view Fixtures</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
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
      Theme URL: https://John elton okoth.com/nice-admin-bootstrap-admin-html-template/
      Author: John elton okoth
      Author URL: https://John elton okoth.com
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
            <h3 class="page-header"><i class="fa fa-table"></i> Fixtures</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
                fixtures
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>ScheduleID</th>
                    <th>RaceDate</th>
                    <th>Number Of Participants</th>
                    <th>Team Tag Number</th>
                    <th>Stage</th>
                    <th>Starting Point</th>
                    <th>Fuelling Point</th>
                    <th>Ending Point</th>
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from schedule")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['schedueid']."</td>
                    <td>".$row['racedate']."</td>
                    <td>".$row['numberofparticipants']."</td>
                    <td>".$row['teamtagnumber']."</td>
                    <td>".$row['stage']."</td>
                    <td>".$row['startingpoint']."</td>
                    <td>".$row['fuellingpoint']."</td>
                    <td>".$row['endingpoint']."</td>
                   <td> <a href='viewfixtures.php?apid=$row[id]' ><a>
                   <a href='viewfixtures.php? rjid=$row[id]' ><a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
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
            Licensing information: https://John elton okoth.com/license/
            Purchase the pro version form: https://John elton okoth.com/buy/?theme=NiceAdmin
          -->
          &copy <a href="https://John elton okoth.com/">John elton okoth</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

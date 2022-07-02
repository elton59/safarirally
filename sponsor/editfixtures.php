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

  <title>EditFixtures</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Fixtures</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
                Fixtures
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
                   <td> <a href='editfixtures.php?apfxid=$row[id]' class='btn btn-primary'>Edit<a>
                   <a href='process.php? delfxid=$row[id]' class='btn btn-danger' >Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
             <div class="form-group" >                   
        </div> 
                </tbody>
              </table>
              <?php
    if (isset($_GET['apfxid']))
{
  $id=$_GET['apfxid'];
  $result=$mysqli->query("select * from schedule where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
                    $id=$row['id'];
                    $schid=$row['schedueid'];
                    $schrdate=$row['racedate'];
                     $schnop=$row['numberofparticipants'];
                     $schttno=$row['teamtagnumber'];
                     $schstage=$row['stage'];
                     $schst=$row['startingpoint'];
                     $schfl= $row['fuellingpoint'];
                     $schend=$row['endingpoint'];
                

    echo "success";
    
}
else
{
  echo "record will be displayed here";
}
?>
 <div class="form-group" >
 <form class="form-horizontal " method="POST" action="process.php">
               
                  <div class="form-group">
                  <input  name="id"type="hidden" class="form-control round-input" placeholder="input schedule ID" value='<?php echo $id; ?>'>
                    <label class="col-sm-2 control-label">ScheduleID</label>
                    <div class="col-sm-10">
                      <input  name="schid"type="text" class="form-control round-input" placeholder="input schedule ID" value='<?php echo $schid; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">RaceDate</label>
                    <div class="col-sm-10">
                      <input name="schrdate" type="text" class="form-control round-input" placeholder="input Race Date" value='<?php echo $schrdate; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Number Of Participants</label>
                    <div class="col-sm-10">
                      <input name="schnop" type="text" class="form-control round-input" placeholder="input  Number of Participants " value='<?php echo $schnop; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Team Tag Number</label>
                    <div class="col-sm-10">
                      <input  name="schttno" type="text" class="form-control round-input" placeholder="input Team Tag Number" value='<?php echo $schttno; ?>'>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Stage</label>
                    <div class="col-sm-10">
                      <input  name="schstage" type="date" class="form-control round-input" placeholder="input  Stage" value='<?php echo $schstage; ?>'>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Starting Point </label>
                    <div class="col-sm-10">
                      <input  name="schst" type="text" class="form-control round-input" placeholder="input  Starting point" value='<?php echo $schst; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fuelling point </label>
                    <div class="col-sm-10">
                      <input  name="schfl" type="text" class="form-control round-input" placeholder="input Fuelling point" value='<?php echo $schfl; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ending Point </label>
                    <div class="col-sm-10">
                      <input  name="schend" type="text" class="form-control round-input" placeholder="input  Ending point " value='<?php echo $schend; ?>'>
                    </div>
                  </div>
                f
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="schefx" value="Update"/>
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
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

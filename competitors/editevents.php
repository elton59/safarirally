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

  <title>view Events</title>

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
                Events
              </header>
              <div class="table-responsive">
               <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>EventID</th>
                    <th>EventName</th>
                    <th>Sponsor</th>
                    <th>Organizer</th>
                    <th>EventDate</th>
                    <th>Venue</th>
                    <th>Duration</th>
                    <th>numberofcompetitors</th>
                    <th>TeanTagNo</th>
                    <th>ScheduleID</th>
                    <th>AwardID</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $result=$mysqli->query("select * from eventdetail")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['eventid']."</td>
                    <td>".$row['eventname']."</td>
                    <td>".$row['sponsor']."</td>
                    <td>".$row['organizer']."</td>
                    <td>".$row['eventdate']."</td>
                    <td>".$row['venue']."</td>
                    <td>".$row['duration']."</td>
                    <td>".$row['numberofcompetitors']."</td>
                    <td>".$row['teamtagnumber']."</td>
                    <td>".$row['scheduleid']."</td>
                    <td>".$row['awardid']."</td>
                   <td> <a href='editevents.php?apeid=$row[id]' class='btn btn-success'>Edit<a>
                   <a href='process.php? deleid=$row[id]' class='btn btn-danger'>Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
             <div class="form-group" >                   
        </div> 
                </tbody>
              </table>
              <?php
    if (isset($_GET['apeid']))
{
  $id=$_GET['apeid'];
  $result=$mysqli->query("select * from eventdetail where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
                    $id=$row['id'];
                    $evid=$row['eventid'];
                    $evname=$row['eventname'];
                   $evspon=$row['sponsor'];
                   $evorg=$row['organizer'];
                 $evdate=$row['eventdate'];
                $evven=$row['venue'];
                $evdue=$row['duration'];
             $evnoc= $row['numberofcompetitors'];
            $evttno=$row['teamtagnumber'];
                    $evschid=$row['scheduleid'];
                    $evawid=$row['awardid'];

    echo "success";
    
}
else
{
  echo "record will be displayed here";
}
?>
 <div class="form-group" >
            <form method='POST' action='process.php' enctype="multipath/form-data">
            
                     
                   
            <input  name="upid"type="hidden" placeholder="input event ID" value='<?php echo $id; ?>'>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EventID</label>
                    <div class="col-sm-10">
                      <input  name="evid"type="text" class="form-control round-input" placeholder="input event ID" value='<?php echo $evid; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EventName</label>
                    <div class="col-sm-10">
                      <input name="evname" type="text" class="form-control round-input" placeholder="input event Name"  value='<?php echo $evname; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sponsor</label>
                    <div class="col-sm-10">
                      <input name="evspon" type="text" class="form-control round-input" placeholder="input event sponsor "  value='<?php echo $evspon; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orgarnizer</label>
                    <div class="col-sm-10">
                      <input  name="evorg" type="text" class="form-control round-input" placeholder="input event Ogarnizer"  value='<?php echo $evorg; ?>'>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">EventDate</label>
                    <div class="col-sm-10">
                      <input  name="evdate" type="date" class="form-control round-input" placeholder="input event Datde"  value='<?php echo $evdate; ?>'>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Duration </label>
                    <div class="col-sm-10">
                      <input  name="evdue" type="text" class="form-control round-input" placeholder="input event Duration"  value='<?php echo $evdue; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Venue </label>
                    <div class="col-sm-10">
                      <input  name="evven" type="text" class="form-control round-input" placeholder="input event Venue"  value='<?php echo $evven; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Number Of Competitors </label>
                    <div class="col-sm-10">
                      <input  name="evnoc" type="text" class="form-control round-input" placeholder="input event Number of Competitors"  value='<?php echo $evnoc; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Team Tag No </label>
                    <div class="col-sm-10">
                      <input  name="evttno" type="text" class="form-control round-input" placeholder="input event Team Tag Number"  value='<?php echo $evttno; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ScheduleID </label>
                    <div class="col-sm-10">
                      <input  name="evschid" type="text" class="form-control round-input" placeholder="input event Schedule ID"  value='<?php echo $evschid; ?>'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">AWard ID</label>
                    <div class="col-sm-10">
                      <input  name="evawid" type="text" class="form-control round-input" placeholder="input event AwardID"  value='<?php echo $evawid; ?>'>
                    </div>
                  </div>
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uschev" value="Update"/>
                   <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
                

                        


                     
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

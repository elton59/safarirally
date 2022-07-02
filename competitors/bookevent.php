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

  <title>Shedule Events</title>

 <!-- Bootstrap CSS -->
 <link href=".../logistics/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../logistics/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../logistics/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../logistics/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../logistics/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../logistics/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../logistics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../logistics/owl.carousel.css" type="text/css">
  <link href="../logistics/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="../logistics/tylesheet" href="..logistics/css/fullcalendar.css">
  <link href="../logistics/css/widgets.css" rel="stylesheet">
  <link href="../logistics/css/style.css" rel="stylesheet">
  <link href="../logisitcs/css/style-responsive.css" rel="stylesheet" />
  <link href="../logistics/css/xcharts.min.css" rel=" stylesheet">
  <link href="../logistics/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
  
  <?if(isset($_GET['bpid']))
  {
    $bpid=$_GET['bpid'];
  }
  
  ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Shedule Event</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="main.php">Home</a></li>
              <li><i class="icon_document_alt"></i>view events</li>
           
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Schedule Events
              </header>
              <div class="panel-body">
                <?php 
                $bpid=$_GET['bpid'];
                $result=$mysqli->query("select * from eventdetail where id='$bpid'");
                $row=$result->fetch_assoc();
                $id=$row['id'];
                $event_name=$row['eventname'];
                $sponsor=$row['sponsor'];
                $organizer=$row['organizer'];
                $eventdate=$row['eventdate'];
                $duration=$row['duration'];
                $nduration=$row['id'];
                $venue=$row['venue'];
                $teamtagnumber=$row['id'];
                $drivername=$row['id'];
                $codrivername=$row['id'];
             
                ?>
                <form class="form-horizontal " method="POST" action="process.php">
               
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EventID</label>
                    <div class="col-sm-10">
                      <input  name="evid"type="text" class="form-control round-input" placeholder="input event ID" value="<?php echo $id?>" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EventName</label>
                    <div class="col-sm-10">
                      <input name="evname" type="text" class="form-control round-input" placeholder="input event Name"   value="<?php echo $event_name?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sponsor</label>
                    <div class="col-sm-10">
                      <input name="evspon" type="text" class="form-control round-input" placeholder="input event sponsor "  value="<?php echo $sponsor?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orgarnizer</label>
                    <div class="col-sm-10">
                      <input  name="evorg" type="text" class="form-control round-input" placeholder="input event Ogarnizer"  value="<?php echo $organizer?>">
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">EventDate</label>
                    <div class="col-sm-10">
                      <input  name="evdate" type="date" class="form-control round-input" placeholder="input event Datde"  value="<?php echo $eventdate?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">End Date </label>
                    <div class="col-sm-10">
                      <input  name="evdue" type="dates" class="form-control round-input" placeholder="input event End Date"  value="<?php echo $duration?>">
                    </div>
                    
                  </div>
                 
                    
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Venue </label>
                    <div class="col-sm-10">
                      <input  name="evven" type="text" class="form-control round-input" placeholder="input event Venue"  value="<?php echo $venue?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DriverName </label>
                    <div class="col-sm-10">
                    <select name="evdr" class="form-control round-input" readonly>
                    <?php 
                                            $result=$mysqli->query("select * from driverdetails where email='$login_session' limit 1")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['fullname'];
                                               
                                                array_push($drivers_list,$driver_email);
                                                
                                            
                                               
                                            }
                                            foreach($drivers_list as $drivers)
                                            {

                                               echo "<option value='$drivers' class='form-control'>$drivers</option>";
                                     
                                            }
                                           ?>
                                   </select>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">DriverEmail </label>
                    <div class="col-sm-10">
                    <select name="evdmail" class="form-control round-input" readonly>
                    <?php 
                                            $result=$mysqli->query("select * from driverdetails where email='$login_session' limit 1")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['email'];
                                               
                                                array_push($drivers_list,$driver_email);
                                                
                                            
                                               
                                            }
                                            foreach($drivers_list as $drivers)
                                            {

                                               echo "<option value='$drivers' class='form-control'>$drivers</option>";
                                     
                                            }
                                           ?>
                                   </select>
                    
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">codrivername </label>
                    <div class="col-sm-10">
                    <select name="evcod" class="form-control round-input" readonly>
                    <?php 
                                            $result=$mysqli->query("select * from codriverdetails where driver_email='$login_session' limit 1")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['firstname'];
                                               
                                                array_push($drivers_list,$driver_email);
                                                
                                            
                                               
                                            }
                                            foreach($drivers_list as $drivers)
                                            {

                                               echo "<option value='$drivers' class='form-control'>$drivers</option>";
                                     
                                            }
                                           ?>
                                   </select>
                    
                    </div>
                  </div>
                
                  <label class="col-sm-2 control-label">Team Tag Number </label>
                    <div class="col-sm-10">
                    <select name="evttno" class="form-control round-input" readonly>
                    <?php 
                                            $result=$mysqli->query("select * from team where driver_email='$login_session' limit 1")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['teamtagnumber'];
                                               
                                                array_push($drivers_list,$driver_email);
                                                
                                            
                                               
                                            }
                                            foreach($drivers_list as $drivers)
                                            {

                                               echo "<option value='$drivers' class='form-control'>$drivers</option>";
                                     
                                            }
                                           ?>
                                   </select>
                    
                    </div>
                  </div>
                
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="schev" value="Book Spot"/>
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
  <script src="../logistics/js/jquery.js"></script>
  <script src="../logistics/js/jquery-ui-1.10.4.min.js"></script>
  <script src="../logistics/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../logistics/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../logistics/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../logistics/js/jquery.scrollTo.min.js"></script>
  <script src="../logistics/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../logistisc/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../logistics/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../logistics/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../logistics/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../logistics/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../logistics/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../logistics/js/calendar-custom.js"></script>
    <script src="../logistics/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../logistics/js/jquery.customSelect.min.js"></script>
    <script src="../logistics/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../logistics/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../logistics/js/sparkline-chart.js"></script>
    <script src="../logistics/js/easy-pie-chart.js"></script>
    <script src="../logistics/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../logistics/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../logistics/js/xcharts.min.js"></script>
    <script src="../logistics/js/jquery.autosize.min.js"></script>
    <script src="../logistics/js/jquery.placeholder.min.js"></script>
    <script src="../logistics/js/gdp-data.js"></script>
    <script src="../logistics/js/morris.min.js"></script>
    <script src="../logistics/js/sparklines.js"></script>
    <script src="../logistics/js/charts.js"></script>
    <script src="../logistics/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>


</body>

</html>
s
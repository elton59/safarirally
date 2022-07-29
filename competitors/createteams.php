<?php
include("header.php");
include("sidebar.php");
include("session.php");

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

  <title> Create Teams</title>

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
  <link rel="s../logistics/tylesheet" href="..logistics/css/fullcalendar.css">
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
  
  <?php
  
    
    $dsunguch=$login_session;
    $result=$mysqli->query("select * from driverdetails where email='$dsunguch'")or die($mysqli->error);
    while($row=$result->fetch_assoc())
    {
     

      
     
      $dfname=$row['fullname'];
    }
   
   
    
  ?>
    <!--main content start-->
    <section id="main-content">
    <?php
    $result=$mysqli->query("select * from team")or die($mysqli->error);
    while($row=$result->fetch_assoc())
    {
    
    $tno=$row['teamtagnumber']+1;
  
 
  
    ;}
?>

      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> AddTeam</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="viewteams.php">viewTeam</a></li>
            </ol>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="editteams.php">editTeam</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
            Create Team
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="POST" action="process.php">
               
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tag Number</label>
                    <div class="col-sm-10">
                    <input type="text" name="tmtno" id="id2" value="<?php echo ($tno);?>" class="form-control round-input"  readonly placeholder="input  Team Tag Number" />
                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Driver Name</label>
                    <div class="col-sm-10">
                      <input name="tmdname" type="text" class="form-control round-input" placeholder="input Drivername" value="<?php echo $dfname ?>" readonly >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">CoDriverName</label>
                    <div class="col-sm-10">
                      <select name="tmcodname" class="form-control round-input" readonly>
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
            
                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Race Car registration number</label>
                    <div class="col-sm-10" >
                     <select name="tmrcno" class="form-control round-input" readonly>
                    <?php 
                                            $result=$mysqli->query("select * from racecar where driver_email='$login_session' limit 1")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['registration_number'];
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
     
                    <div class="col-sm-10">
                      <input type="hidden"  name="tmpid" type="text" class="form-control round-input" placeholder="input paymentID" value="yet to be assigned" readonly>
                    </div>
                  </div>
                  <div class="form-group">
                   
                    <div class="col-sm-10">
                      <input type="hidden" name="tmdemail" type="text" class="form-control round-input" placeholder="input drivermeail" value="<?php echo $login_session ?>" >
                    </div>
                    <div class="form-group">
                 
                 <div class="col-sm-10">
                   <input type="hidden" name="tmcodname2" />
                                     
                 </div>
               </div>
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="adtm" value="Create"/>
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
  <script>
$(document).ready(function(){
$("#update").click(function(){
$("#id2").css("display","none");
var r = parseInt($("#id2").val(),10)+1;
$("#id2").val(r);
});
});

</script>
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

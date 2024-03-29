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

  <title> Book  Service Parks</title>
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
<?php
 $result=$mysqli->query("select * from team")or die($mysqli->error);
 while($row=$result->fetch_assoc())
 {
 
 $tno=$row['teamtagnumber'];
 $rno=$row['racecarregistrationnumber'];
 }?>
  <!-- container section start -->
  <section id="container" class="">
  
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Book Service Parks</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
            Book Service Parks
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="POST" action="process.php">
                  <div class="form-group">
                   
                    <div class="col-sm-10">
                      <input  name="srid"type="hidden" class="form-control round-input" placeholder="input Service ID" value="null">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Provider</label>
                    <div class="col-sm-10">
                      <select  name="srp" class="form-control round-input">
                    <?php 
                                            $result=$mysqli->query("select * from providers ")or die($mysqli->error);
                                            $drivers_list=array();
                                           
                                            while( $row=$result->fetch_array())
                                            {
                                          
                                                $driver_email=$row['provider'];
                                               
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
                    <label class="col-sm-2 control-label">RaceCarRegistrationNumber</label>
                    <div class="col-sm-10">
                      <input name="srcr" type="text" class="form-control round-input" placeholder="input  RaceCarRegistrationNumber" value="<?php echo ($rno);?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">TeamTagNUmber</label>
                    <div class="col-sm-10">
                      <input  name="srttno" type="text" class="form-control round-input" placeholder="input TeamTagNUmber" value="<?php echo ($tno);?>">
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Driver_Email</label>
                    <div class="col-sm-10">
                      <input  name="dremail" type="text" class="form-control round-input" placeholder="input Driver Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?php echo $login_session ?>">
                    </div>
                 </div>
                
                
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="asr" value="Book"/>
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

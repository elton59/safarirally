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

  <title>Recee  car Registration</title>

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
  
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> AddRecee car</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="viewracecar.php">viewRececar</a></li>
            </ol>
            <ol class="breadcrumb">
            
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
            Register Recee Car
              </header>
              <div class="panel-body">
              <form class="form-horizontal " method="POST" action="process.php">
               
               <?php
          
               ?>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Make</label>
                  <div class="col-sm-10">
                    <input name="rmake" type="text" class="form-control round-input" placeholder="Make"minlength="5" maxlength="12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Model</label>
                  <div class="col-sm-10">
                    <input name="rmodel" type="text" class="form-control round-input" placeholder="input model"minlength="3" maxlength="12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Year Of Manufucture</label>
                  <div class="col-sm-10">
                    <input name="ryear"  type="number" class="form-control round-input" placeholder="Year of Manufucture" minlength="4" maxlength="4 ">
                  </div>
                </div>
               
                <div class="form-group">
      
       <label class="col-sm-2 control-label">Country Of registration</label>
       <div class="col-sm-10">
         <select name="rnat" class="form-control round-input" >
         <option  class="form-control " value="none">(Choose county)  </option>
           <option  class="form-control " value="Kenya">Kenya</option>
           <option value="Egypt">Egypt</option>
           <option value="USA">USA</option>
           <optsssion value="India">India</option>
           <option value="Malasia">Malasia</option>
           <option value="Gabon">Gabon</option>
           <option value="Mali">Mali</option>
         </select>
       </div>
       </div>
       <div class="form-group">
                  <label class="col-sm-2 control-label">Registration Number</label>
                  <div class="col-sm-10">
                    <input name="rrno" type="text" class="form-control round-input" placeholder="input registation_number "maxlength="12"minlength="5" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Number Of Doors</label>
                  <div class="col-sm-10">
                    <input name="rndo" type="text" class="form-control round-input" placeholder="input number of doors "maxlength="1"minlength="1">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">CC</label>
                  <div class="col-sm-10">
                    <input name="rcc" type="text" class="form-control round-input" placeholder="input CC "maxlength="4"minlength="2">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Chasis No</label>
                  <div class="col-sm-10">
                    <input name="rchasis" type="text" class="form-control round-input" placeholder="input Chasis"maxlength="12"minlength="5">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Engine NO</label>
                  <div class="col-sm-10">
                    <input name="rengno" type="text" class="form-control round-input" placeholder="input Engine No Number"maxlength="12"minlength="5">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Predominant Color</label>
                  <div class="col-sm-10">
                    <input name="rpdcolor" type="text" class="form-control round-input" placeholder="input predominant color Number"maxlength="12"minlength="3">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">DriverEmail</label>
                  <div class="col-sm-10">
                  <input name="drvemail"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" class="form-control round-input" placeholder="input  Email" required  value="<?php  echo $login_session?>"  maxlength="32" readonly>
                  </div>
                </div>
                <center>
                <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="adrecar" value="Register"/>
                 <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="reset" value="Cancel"/></center>
              </form>
            </div>
          
       
   
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

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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Shedule Events</title>

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
  <?php
    $result=$mysqli->query("select * from eventdetail")or die($mysqli->error);
    while($row=$result->fetch_assoc())
    {
    
    $teamtno=$row['teamtagnumber']
  
 
  
    ;}
?>

  ?>
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Shedule Event</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>view events</li>
              <li><i class="fa fa-file-text-o"></i>Edit events</li>
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
                <form class="form-horizontal " method="POST" action="process.php">
               
                  <div class="form-group">
                   
                    <div class="col-sm-10">
                      <input  type="hidden" name="evid"type="text" class="form-control round-input" placeholder="input event ID" value="null">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">EventName</label>
                    <div class="col-sm-10">
                      <input name="evname" type="text" class="form-control round-input" placeholder="input event Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Sponsor</label>
                    <div class="col-sm-10">
                      <input name="evspon" type="text" class="form-control round-input" placeholder="input event sponsor ">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Orgarnizer</label>
                    <div class="col-sm-10">
                      <input  name="evorg" type="text" class="form-control round-input" placeholder="input event Ogarnizer">
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">start Date</label>
                    <div class="col-sm-10">
                      <input  name="evdate" type="date" class="form-control round-input" placeholder="input event Date" min="<?php echo date('Y-m-d') ?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">End Date </label>
                    <div class="col-sm-10"  >
                      <input  name="evdue" type="date" class="form-control round-input" placeholder="input event Duration" min="<?php echo date('Y-m-d') ?>" >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Venue </label>
                    <div class="col-sm-10">
                      <input  name="evven" type="text" class="form-control round-input" placeholder="input event Venue">
                    </div>
                  </div>                
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="schev" value="Schedule" id="update" />
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
  <script>
$(document).ready(function(){
$("#update").click(function(){
$("#id2").css("display","none");
var r = parseInt($("#id2").val(),10)+1;
$("#id2").val(r);
});
});

</script>
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

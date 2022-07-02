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

  <title>Edit Service Parks</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Service Parks</h3>
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
                Service Parks
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>ServiceID</th>
                    <th>Provider</th>
                    <th>RaceCarRegistrationNumber</th>
                    <th>TeamTagNUmber</th>
                   
                    
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from service")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['serviceid']."</td>
                    <td>".$row['provider']."</td>
                    <td>".$row['racecarregistrationnumber']."</td>
                    <td>".$row['teamtagnumber']."</td>
                   <td> <a href='editserviceparks.php?apsrid=$row[id]' class='btn btn-primary'>Edit<a>
                   <a href='process.php? delsrid=$row[id]' class='btn btn-danger' > Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apsrid']))
{
  $id=$_GET['apsrid'];
  $result=$mysqli->query("select * from service where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
   $srid=$row['serviceid'];
   $srp=$row['provider'];
   $srcr=$row['racecarregistrationnumber'];
   $srttno=$row['teamtagnumber'];

    echo "success";
    
}
else
{
  echo "record will be displayed here";
}
              
?>
 <div class="form-group" >
 <form class="form-horizontal " method="POST" action="process.php">
               
               <input  name="id"type="text" class="form-control round-input"  value='<?php echo $id; ?>'>
               <div class="form-group">
                 <label class="col-sm-2 control-label">ServiceID</label>
                 <div class="col-sm-10">
                  
                 </div>
               </div>
               <div class="form-group">
                   <label class="col-sm-2 control-label">Provider</label>
                 <div class="col-sm-10">
                   <input name="srp" type="year" class="form-control round-input" placeholder="input  Provider"  value='<?php echo $srp ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">RaceCarRegistrationNumber</label>
                 <div class="col-sm-10">
                   <input name="srcr" type="text" class="form-control round-input" placeholder="input  RaceCarRegistrationNumber"  value='<?php echo $srcr; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">TeamTagNUmber</label>
                 <div class="col-sm-10">
                   <input  name="srttno" type="text" class="form-control round-input" placeholder="input TeamTagNUmber"  value='<?php echo $srttno; ?>'>
                 </div>
              </div>
             
             
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uasr" value="Update"/>
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

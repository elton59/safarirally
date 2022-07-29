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

  <title>Edit Teams</title>

  <!-- Bootstrap CSS -->
  <link href="../logistics/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../logistics/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../logistics/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../logistics/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../logistics/css/style.css" rel="stylesheet">
  <link href="../logistics/css/style-responsive.css" rel="stylesheet" />

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
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Teams</h3>
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
                Edit Teams
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>TeamID</th>
                    <th>TagNumber</th>
                    <th>DriverName</th>
                    <th>CodDriverName</th>
                    <th>RaceCarRegistrationNumber</th>  
                     <th>Paymentid</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from team  ")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['teamid']."</td>
                    <td>".$row['tagnumber']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['codrivername']."</td>
                    <td>".$row['racecarregistrationnumber']."</td>
                    <td>".$row['paymentid']."</td>
                    <td> <a href='editteams.php?aptmid=$row[id]'class='btn btn-primary' >Edit<a>
                    <a href='process.php? deltmid=$row[id]' class='btn btn-danger' >Delete<a></td>

                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['aptmid']))
{
  $id=$_GET['aptmid'];
  $result=$mysqli->query("select * from team where id='$id'")or die($mysqli->error);
    $row=$result->fetch_array();
   $tmid=$row['teamid'];
   $tmtno=$row['tagnumber'];
   $tmdname=$row['drivername'];
   $tmcodname=$row['codrivername'];
   $tmrcno=$row['racecarregistrationnumber'];
   $tmpid=$row['paymentid'];

   
   
                

    echo "success";
    
}
else
{
    echo "record will be displayed here";
}

?>
 <div class="form-group" >

 <form class="form-horizontal " method="POST" action="process.php">
 <input  name="id"type="hidden" class="form-control round-input"  value='<?php echo $id; ?>'>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Team ID</label>
                 <div class="col-sm-10">
                   <input  name="tmid"type="text" class="form-control round-input" placeholder="input Team ID" value='<?php echo $tmid; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Tag Number</label>
                 <div class="col-sm-10">
                   <input name="tmtno" type="text" class="form-control round-input" placeholder="input Tag Number" value="yet to be assigned" disabled >
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Driver Name</label>
                 <div class="col-sm-10">
                   <input name="tmdname" type="text" class="form-control round-input" placeholder="input Driver Name" value='<?php echo $tmdname; ?>' >
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">CoDriverName</label>
                 <div class="col-sm-10">
                   <input name="tmcodname" type="text" class="form-control round-input" placeholder="input Driver CodriverName" value='<?php echo $tmcodname; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">RaceCarRegistrationNumber</label>
                 <div class="col-sm-10">
                   <input name="tmrcno" type="text" class="form-control round-input" placeholder="RaceCarRegistrationNumber" value='<?php echo $tmrcno; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Paymentid</label>
                 <div class="col-sm-10">
                   <input name="tmpid" type="text" class="form-control round-input" placeholder="input paymentid" value="yet to be assigned" disabled>
                 </div>
               </div>
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uadtm" value="Update"/>
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
  <script src="../logistics/js/jquery.js"></script>
  <script src="../logistics/js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="../logistics/js/jquery.scrollTo.min.js"></script>
  <script src="../logistics/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="../logistics/js/scripts.js"></script>


</body>

</html>


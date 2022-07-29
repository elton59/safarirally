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

  <title>Edit Drivers</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Drivers</h3>
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
                Edit Drivers
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>DriverID</th>
                    <th>FullName</th>
                    <th>LincenseNumber</th>
                    <th>Nationality</th>
                    <th>CodriverID</th>
                    <th>SponsorID</th>
                    <th>Email</th>
                    <th>Passwords</th>
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from driverdetails")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['driverid']."</td>
                    <td>".$row['fullname']."</td>
                    <td>".$row['lincensenumber']."</td>
                    <td>".$row['nationality']."</td>
                    <td>".$row['codriverid']."</td>
                    <td>".$row['sponsorid']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['password']."</td>
                    <td> <a href='editdrivers.php?apdrid=$row[id]'class='btn btn-primary' >Edit<a>
                   <a href='process.php? deldr=$row[id]' class='btn btn-danger' >Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apdrid']))
{
  $id=$_GET['apdrid'];
  $result=$mysqli->query("select * from driverdetails where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
   $drid= $row['driverid'];
   $drname=$row['fullname'];
   $drlno=$row['lincensenumber'];
   $drnat=$row['nationality'];
   $drspon=$row['sponsorid'];
   $dremail=$row['email'];
   $drpass=$row['password'];
   $drcodid=$row['codriverid'];
   
                

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
                 <label class="col-sm-2 control-label">Driver ID</label>
                 <div class="col-sm-10">
                   <input  name="drid"type="text" class="form-control round-input" placeholder="input Driver ID" value='<?php echo $drid; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Full Name</label>
                 <div class="col-sm-10">
                   <input name="drname" type="text" class="form-control round-input" placeholder="input Driver Full Name" value='<?php echo $drname; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Lincence Number</label>
                 <div class="col-sm-10">
                   <input name="drlno" type="text" class="form-control round-input" placeholder="input Driver Lincense Number" value='<?php echo $drlno; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Nationality</label>
                 <div class="col-sm-10">
                   <input name="drnat" type="text" class="form-control round-input" placeholder="input Driver Nationality" value='<?php echo $drnat; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">CoDriverID</label>
                 <div class="col-sm-10">
                   <input name="drcodid" type="text" class="form-control round-input" placeholder="input Driver COdriverID" value='<?php echo $drcodid; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Sponsor ID</label>
                 <div class="col-sm-10">
                   <input name="drspon" type="text" class="form-control round-input" placeholder="input Driver Sponsor ID" value='<?php echo $drspon; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                   <input name="dremail" type="text" class="form-control round-input" placeholder="input Driver Email" value='<?php echo $dremail; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Password</label>
                 <div class="col-sm-10">
                   <input name="drpass" type="text" class="form-control round-input" placeholder="input password" value='<?php echo $drpass; ?>'>
                 </div>
               </div>
             
             
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uadr" value="Update"/>
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


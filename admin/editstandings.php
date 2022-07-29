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

  <title>EditStandings</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Standings</h3>
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
                Fixtures
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>StandingID</th>
                    <th>StandingDate/th>
                    <th>TagNumber</th>
                    <th>DriverID</th>
                    <th>CoDriverName</th>
                    <th>CompletionTime</th>
                    <th>EventID</th>
                    <th>Penalty</th>
                    <th>Rewards</th>
                    <th>Points</th>
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from standings where points='' or null")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['standingid']."</td>
                    <td>".$row['standingdate']."</td>
                    <td>".$row['tagnumber']."</td>
                    <td>".$row['driverid']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['completiontime']."</td>
                    <td>".$row['eventid']."</td>
                    <td>".$row['penalty']."</td>
                    <td>".$row['reward']."</td>
                    <td>".$row['points']."</td>
                   <td> <a href='editstandings.php?apstid=$row[id]'  class='btn btn-primary'>Award Points<a>
                   <a href='process.php? delstid=$row[id]' class='btn btn-danger' > Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apstid']))
{
  $id=$_GET['apstid'];
  $result=$mysqli->query("select * from standings where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
    $stid=$row['standingid'];
    $stdate=$row['standingdate'];
    $sttno=$row['tagnumber'];
    $stdid=$row['driverid'];
    $stdname=$row['drivername'];
    $stcodname=$row['codrivername'];
    $stcot=$row['completiontime'];
    $steid=$row['eventid'];
    $stpen=$row['penalty'];
    $strew=$row['reward'];
    $stpoint=$row['points'];
                

    echo "success";
    
}
else
{
  echo "record will be displayed here";
}

?>
 <div class="form-group" >
 <form class="form-horizontal " method="POST" action="process.php">
 <input  name="id"type="hidden" class="form-control round-input"  value='<?php echo $id; ?>' disabled>
               <div class="form-group">
                 <label class="col-sm-2 control-label">StandingID</label>
                 <div class="col-sm-10">
                   <input  name="stid"type="text" class="form-control round-input" placeholder="input Standing ID"  value='<?php echo $stid; ?>' disabled>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Standing Date</label>
                 <div class="col-sm-10">
                   <input name="stdate" type="date" class="form-control round-input" placeholder="input  Date"  value='<?php echo $stdate; ?>' disabled>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Tag Number</label>
                 <div class="col-sm-10">
                   <input name="sttno" type="number" class="form-control round-input" placeholder="input  Tag Number "  value='<?php echo $sttno; ?>' disabled>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">DriverID</label>
                 <div class="col-sm-10">
                   <input  name="stdid" type="text" class="form-control round-input" placeholder="input DriverID"  value='<?php echo $stid; ?>' disabled>
                 </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">DriverName</label>
                 <div class="col-sm-10">
                   <input  name="stdname" type="text" class="form-control round-input" placeholder="input  DriverName"  value='<?php echo $stcodname; ?>' disabled>
                 </div>
                 </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">CoDriverName</label>
                 <div class="col-sm-10">
                   <input  name="stcodname" type="text" class="form-control round-input" placeholder="input  CoDriverName"  value='<?php echo $stcodname; ?>' disabled>
                 </div>
                 </div>
                 <div class="form-group">
                 <label class="col-sm-2 control-label">CompletionTime </label>
                 <div class="col-sm-10">
                   <input  name="stcot" type="text" class="form-control round-input" placeholder="input  CompletionTime"  value='<?php echo $stcot; ?>' disabled>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">EventID </label>
                 <div class="col-sm-10">
                   <input  name="steid" type="text" class="form-control round-input" placeholder="input EventID"  value='<?php echo $steid; ?>' disabled>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Penalty </label>
                 <div class="col-sm-10">
                   <input  name="stpen" type="number" class="form-control round-input" placeholder="input  penalty "  value='<?php echo $stpen; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Reward </label>
                 <div class="col-sm-10">
                   <input  name="strew" type="number" class="form-control round-input" placeholder="input  Reward "  value='<?php echo $strew; ?>'>
                 </div>
</div>
                 <div class="form-group">
                 <label class="col-sm-2 control-label">Points </label>
                 <div class="col-sm-10">
                   <input  name="stpoint" type="number" class="form-control round-input" placeholder="input  points "  value='<?php echo $stpoint; ?>'>
                 </div>
               </div>
               </div>
             
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="ust" value="Update"/>
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

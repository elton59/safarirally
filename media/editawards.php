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

  <title>Edit Awards</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Awards</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-12">
            <section class="panel">
              <header class="panel-heading">
                Awards
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>AwardID</th>
                    <th>Year</th>
                    <th>EventName</th>
                    <th>TeamTagNUmber</th>
                    <th>DriverName</th>
                    <th>CoDriverName</th>
                    <th>Amount</th>
                    
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from award")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['awardid']."</td>
                    <td>".$row['year']."</td>
                    <td>".$row['eventname']."</td>
                    <td>".$row['drivername']."</td>
                    <td>".$row['codrivername']."</td>
                    <td>".$row['amount']."</td>
                   <td> <a href='editawards.php?apawid=$row[id]' class='btn btn-primary'>Edit<a>
                   <a href='process.php? delawid=$row[id]' class='btn btn-danger' > Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apawid']))
{
  $id=$_GET['apawid'];
  $result=$mysqli->query("select * from award where id=$id")or die($mysqli->error);
    $row=$result->fetch_array();
    $awid=$row['awardid'];
    $awyr=$row['year'];
    $awename=$row['eventname'];
    $awdname=$row['drivername'];
    $awttno=$row['teamtagnumber'];
    $awcodname=$row['codrivername'];
    $awamount=$row['amount'];
                

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
                 <label class="col-sm-2 control-label">AwardID</label>
                 <div class="col-sm-10">
                   <input  name="awid"type="text" class="form-control round-input" placeholder="input Award ID" value='<?php echo $awid; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Year</label>
                 <div class="col-sm-10">
                   <input name="awyr" type="year" class="form-control round-input" placeholder="input  Year" value='<?php echo $awyr; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">Event Name</label>
                 <div class="col-sm-10">
                   <input name="awename" type="text" class="form-control round-input" placeholder="input  Event Name" value='<?php echo $awename; ?>'>
                 </div>
               </div>
               <div class="form-group">
                 <label class="col-sm-2 control-label">TeamTagNUmber</label>
                 <div class="col-sm-10">
                   <input  name="awttno" type="text" class="form-control round-input" placeholder="input TeamTagNUmber" value='<?php echo $awttno; ?>'>
                 </div>
              </div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">DriverName</label>
                 <div class="col-sm-10">
                   <input  name="awdname" type="text" class="form-control round-input" placeholder="input  DriverName" value='<?php echo $awdname; ?>'>
                 </div>
</div>
              <div class="form-group">
                 <label class="col-sm-2 control-label">CoDriverName</label>
                 <div class="col-sm-10">
                   <input  name="awcodname" type="text" class="form-control round-input" placeholder="input  CoDriverName" value='<?php echo $awcodname; ?>'>
                 </div>
                 </div>
                 <div class="form-group">
                 <label class="col-sm-2 control-label">Amount </label>
                 <div class="col-sm-10">
                   <input  name="awamount" type="text" class="form-control round-input" placeholder="input  Amount" value='<?php echo $awamount; ?>'>
                 </div>
               </div>
             
             
               <center>
               <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uawd" value="Update"/>
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

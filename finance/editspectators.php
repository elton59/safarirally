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

  <title>Edit Spectators</title>

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
            <h3 class="page-header"><i class="fa fa-table"></i> Edit Spectators</h3>
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
                Edit Spectators
              </header>
              <div class="table-responsive">
              <table class="table-responsive table table-bordered">
                <thead>
                  <tr>
                    <th>SpectatorName</th>
                    <th>Nationalty</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Password</th>
                   
                   
                  </tr>
                </thead>
                <tbody>

                <?php
                  $result=$mysqli->query("select * from spectatordetails")or die($mysqli->error);
                  while($row=$result->fetch_assoc())
                  {
                    echo

                    "
                    <tbody>
                    <td>".$row['name']."</td>
                    <td>".$row['nationality']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['password']."</td>
                    <td> <a href='editspectators.php?apspecid=$row[id]' class='btn btn-primary' >Edit<a>
                   <a href='process.php? delspecid=$row[id]'  class='btn btn-danger'>Delete<a></td>
                   </tbody>
                    "
                  ;}
            ?>
    
              </table>
              <?php
    if (isset($_GET['apspecid']))
{
  $id=$_GET['apspecid'];
  $result=$mysqli->query("select * from spectatordetails where id='$id'")or die($mysqli->error);
    $row=$result->fetch_array();
   $specname= $row['name'];
   $specnat=$row['nationality'];
   $specemail=$row['email'];
   $specpass=$row['gender'];
   $specgen=$row['password'];

   
                

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
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input  name="specname" type="text" class="form-control round-input" placeholder="input Name" value='<?php echo $specname; ?>'>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-10">
                      <input name="specnat" type="text" class="form-control round-input" placeholder="input Nationality" value='<?php echo $specnat; ?>'>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                      <input name="specgen" type="text" class="form-control round-input" placeholder="input Gender" value='<?php echo $specgen; ?>'>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input name="specemail" type="text" class="form-control round-input" placeholder="input Email" value='<?php echo $specemail; ?>'>>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Passwords</label>
                    <div class="col-sm-10">
                      <input name="specpass" type="text" class="form-control round-input" placeholder="input password" value='<?php echo $specpass; ?>'>>
                    </div>
                  </div>
                  <center>
                  <input class="btn btn-primary" href="" title="Bootstrap 3 themes generator" type="submit" name="uadspec" value="Update"/>
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


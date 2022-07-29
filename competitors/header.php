<?php
session_start();
include("session.php");
?>
<header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form" method='POST' action='search.php'>
              <input class="form-control" name='searchr' placeholder="Search fixture" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

     
          <!-- inbox notificatoin start-->
          <li id="mail_notificatoin_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important"><?php
                 $sunguch=$login_session;
              $result=$mysqli->query("select *  from feedback where status='pending' and email='$sunguch'") or die(mysqli_error($mysqli));
           
              while(list($id)=mysqli_fetch_array($result))
              {
                $sql="SELECT COUNT(email) AS total FROM feedback  where status='pending' and receiver='$sunguch'";
                $result=$mysqli->query($sql);
                $values=mysqli_fetch_assoc($result);
                $num_rows=$values["total"];
                echo "$num_rows";
              }
              ?></span>
                        </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-blue"></div>
            
              <li>
              <a href="feedback.php">
                <p class="blue">You have <?php
                 $sunguch=$login_session;
              $result=$mysqli->query("select *  from feedback where status='pending' and email='$sunguch'") or die(mysqli_error($mysqli));
           
              while(list($id)=mysqli_fetch_array($result))
              {
                $sql="SELECT COUNT(email) AS total FROM feedback  where status='pending' and receiver='$sunguch'";
                $result=$mysqli->query($sql);
                $values=mysqli_fetch_assoc($result);
                $num_rows=$values["total"];
                echo "$num_rows";
              }
              ?> new messages</p>
              </a>
              </li>
              
              
            </ul>
          </li>
         
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="#">
                            </span>
                            <span class="username"><?php echo $login_session ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="feedback.php"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              
           
              <li>
                <a href="logout.php"><i class="icon_key_alt"></i> Log Out</a>
              </li>
            
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->
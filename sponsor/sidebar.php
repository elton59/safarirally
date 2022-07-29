  <!--sidebar start-->
  <?php
  include("session.php");
  ?>
  <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="main.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Results</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="viewawards.php">Awards</a></li>
              <li><a class="" href="viewstandings.php">Standings</a></li>
              <li><a class="" href="viewfixtures.php">Fixtures</a></li>
              <li><a class="" href="viewevents.php">Events</a></li>
            </ul>
          </li>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Sponsors</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
        
              <li><a class="" href="viewsponsors.php">View Sponsors</a></li>
             
            </ul>
          </li>
         
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Payments</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="createpayments.php">Make Payment</a></li>
              <li><a class="" href="viewpayments.php">My Payments</a></li>
            
            </ul>
          </li>
         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

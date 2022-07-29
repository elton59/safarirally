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
                          <span>Manage Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="createlogistics.php">Logistics</a></li>
              <li><a class="" href="createfinance.php">Finance</a></li>
              <li><a class="" href="createdrivers.php">Competitors</a></li>
              <li><a class="" href="createsponsor.php">Sponsor</a></li>
              <li><a class="" href="createmedia.php">Media</a></li>
              <li><a class="" href="createspectators.php">Spectator</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>View</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="viewevents.php">Events</a></li>
            <li><a class="" href="viewteams.php">Teams</a></li>
            <li><a class="" href="viewfixtures.php">Fixtures</a></li>
            <li><a class="" href="viewstandings.php">Standings</a></li>
              <li><a class="" href="viewawards.php">Awards</a></li>
           
              
            
            </ul>
          </li>
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Award Points</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="editstandings.php">Award Points</a></li>
              <li><a class="" href="viewstandings.php">View Standings</a></li>  
            </ul>
          </li> -->
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Service Car</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">  
              <li><a class="createstandings.php" href="editserviceparks.php"> AddServiceID</a></li>
              <li><a class="viewstandings.php" href="viewserviceparks.php">View Service</a></li>
            </ul>
          </li> -->
        
         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

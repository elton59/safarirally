  <!--sidebar start-->
  <?php
  include("session.php");
  include("codriversession.php");
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
          <!-- <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Book Event</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="viewevents.php">Book Event</a></li>
            </ul>
          </li> -->
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
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>CoDriver</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="createcodrivers.php">Register Codriver</a></li> 
            <li><a class="" href="viewcodrivers.php">View Codrivers</a></li> 
            <!-- <li><a class="" href="editcodrivers.php">edit  CoDrivers</a></li>   -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>My Team Details</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">  
              <li><a class="createstandings.php" href="createteams.php"> AddTeam</a></li>
              <li><a class="viewstandings.php" href="viewteams.php">ViewTeam</a></li>
              <!-- <li><a class="viewstandings.php" href="Editteams.php">EditTeam</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Service Parks</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="createserviceparks.php">Book Service Park</a></li>
              <li><a class="" href="viewserviceparks.php">View Service Parks</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Payments</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
           
              <li><a class="" href="viewpayments.php">My Payments</a></li>
            
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Car Registration</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="racecar.php">RaceCar</a></li>
              <li><a class="" href="racee.php">ReceeCar</a></li>
              
            </ul>
          </li>
         

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

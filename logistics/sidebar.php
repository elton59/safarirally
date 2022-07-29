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
                          <span>Events</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="scheduleevent.php">Schedule Events</a></li>
              <li><a class="" href="viewevents.php">View Events</a></li>
           
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Fixtures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="viewevents.php">Schedule Fixtures</a></li>
              <li><a class="" href="viewfixtures.php">View Fixtures</a></li>
              <!-- <li><a class="" href="editfixtures.php">Edit Fixtures</a></li> -->
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>standings</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              
             
              <li><a class="editstandings.php" href="viewstandings.php">View Standings</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Awards</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            
              <li><a class="" href="viewawards.php">View Awards</a></li>
           
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Service Park</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
            <li><a class="" href="createserviceparks.php">Add Service Park</a></li>
              <li><a class="" href="viewserviceparks.php">view Service Park</a></li>
             
            </ul>
          </li>

          

         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

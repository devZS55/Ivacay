
    <section>
      <div class="DashboardMain">
        <div class="dashboarLeftarea">
          <div class="primary-nav">
            <button href="#" class="hamburger open-panel nav-toggle">
            <span class="screen-reader-text">Menu</span>
            </button>
            <nav role="navigation" class="menu">
              <a href="#" class="logotype"><img src="{{asset('guider/images/logo.png')}}" class="img-responsive"></a>
              <div class="overflow-container">
                <ul class="menu-dropdown">                  
                  <li class="menu-hasdropdown">
                    <a href="{{route('Guider_index')}}">Jobs</a><span class="icon"><img src="{{asset('guider/images/toogleicon1.png')}}" class="img-responsive"></span>
                  </li>
                  <li class="menu-hasdropdown">
                    <a href="{{route('Guider_orders')}}">Orders</a><span class="icon"><img src="{{asset('guider/images/toogleicon1.png')}}" class="img-responsive"></span>
                  </li>
                  <li class="menu-hasdropdown">
                    <a href="{{route('Guider_profile')}}">Guider Profile</a><span class="icon"><img src="{{asset('guider/images/toogleicon1.png')}}" class="img-responsive"></span>
                    <!-- <label title="toggle menu" for="Business">
                    <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                    </label>
                    <input type="checkbox" class="sub-menu-checkbox" id="Business" /> -->
                  </li>
                  <li class="menu-hasdropdown">
                    <a href="{{route('Guider_packages')}}" class="tablinks" onclick="openCity(event, 'Servicestabs')">Guider Packages</a><span class="icon"><img src="{{asset('guider/images/toogleicon9.png')}}" class="img-responsive"></span>
                    <!-- <label title="toggle menu" for="Servicesoffered">
                    <span class="downarrow"><i class="fa fa-caret-down"></i></span> -->
                    </label>
                    <!-- <input type="checkbox" class="sub-menu-checkbox" id="Servicesoffered" /> -->
                  </li>
<!-- /============================== JOB PORTAL ============== -->
                  <!-- <label title="toggle menu" for="Servicearea">
                  <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                  </label>
                  <input type="checkbox" class="sub-menu-checkbox" id="Servicearea" /> -->
                  <!-- <li class="menu-hasdropdown">
                    <a href="{{route('Guider_job_portal')}}">job portal</a><span class="icon"><img src="{{asset('guider/images/toogleicon13.png')}}" class="img-responsive"></span>
                    <ul class="sub-menu-dropdown">
                      <li><a href="">Profile</a><span class="icon"><img src="{{asset('guider/images/toogleicon14.png')}}" class="img-responsive"></span></li>
                      <li><a href="">Security</a><span class="icon"><img src="{{asset('guider/images/toogleicon15.png')}}" class="img-responsive"></span></li>
                      <li><a href="">Account</a><span class="icon"><img src="{{asset('guider/images/toogleicon16.png')}}" class="img-responsive"></span></li>
                    </ul>
                  </li>  -->
<!-- /=============================== JOB PORTAL ============= -->
                  <!-- <li class="menu-hasdropdown">
                    <a href="#">Package Detail</a><span class="icon"><img src="{{asset('guider/images/toogleicon14.png')}}" class="img-responsive"></span>
                    <label title="toggle menu" for="Loadaccount">
                    <span class="downarrow"><i class="fa fa-caret-down"></i></span>
                    </label>
                    <input type="checkbox" class="sub-menu-checkbox" id="Loadaccount" />
                    <ul class="sub-menu-dropdown">
                      <li><a href="">package</a></li>
                      <li><a href="">pakage payment</a></li>
                    </ul>
                  </li> -->
                  <li class="menu-hasdropdown">
                    <a href="{{route('UI_logout')}}">Logout</a>
                    <span class="icon">
                      <img src="{{asset('guider/images/toogleicon1.png')}}" class="img-responsive">
                    </span>
                  </li>
                                                   
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <div class="dashboarRightarea">
          <div class="new-wrapper">
            <!-- Top Profile Section -->
            <div class="profiletopblue">
              <div class="navbar">
                <!--Separate-->
                <div class="navbar-separate">
                  <div class="searching">
                    
                  </div>
                </div>
                <!--Perfil-->
                <div class="navbar-profile">
                  <div class="dropdown">
                     <a href="javascript:void(0)" class="avatar">user</a>
                    <div class="dropdown-content">
                      <ul>
                        <a href="{{route('Guider_profile')}}">Profile</a>
                        <li><a href="{{route('Guider_upgrade_membership_plan')}}">Upgrade Package</a></li>
                        <!-- <li href="#">Setting</li> -->
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- END Profile Section -->
<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light bg-body navbar-static">

    <!-- Header with logos -->
    <div class="navbar-header sidebar-light bg-indigo-400 d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md">
            <a href="index.html" class="d-inline-block">
                <img src="../../../../global_assets/images/logo_light.png" alt="">
            </a>
        </div>
        
        <div class="navbar-brand navbar-brand-xs">
            <a href="index.html" class="d-inline-block">
                <img src="../../../../global_assets/images/logo_icon_light.png" alt="">
            </a>
        </div>
    </div>
    <!-- /header with logos -->


    <!-- Mobile controls -->
    <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
            <a href="index.html" class="d-inline-block">
                <img src="../../../../global_assets/images/logo_light.png" alt="">
            </a>
        </div>	

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <!-- /mobile controls -->


    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="badge bg-pink-400 badge-pill my-3 my-md-0 ml-md-3 mr-md-auto">need confirmation</span>

        <form id="logout-form" action="#" method="POST" style="display: none;">
              @csrf
         </form>
        <ul class="navbar-nav">


            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle mr-2" height="34" alt="">
                    <span></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- /navbar content -->
    
</div>
<!-- /main navbar -->


<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
data-sidebar-position="fixed" data-header-position="fixed">

<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./index.html" aria-expanded="false">
          <span>
            <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">Product Category</span>

        </a>
      </li>



      <li class="sidebar-item">
        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
          <span>
            <i class="ti ti-cards"></i>
          </span>
          <span class="hide-menu">Card</span>
        </a>
      </li>



      <li class="sidebar-item">
        <a class="sidebar-link" >
          <span>
            <i class="ti ti-logout"></i>
          </span>
           <span>
              <a href="#" class="sidebar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
              </form>

            </a>
           </span>

      </li>




  </nav>

</div>

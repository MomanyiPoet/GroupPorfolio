<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="dashboard.php" target="_blank">
      <span class="ms-1 font-weight-bold text-white">Group Dashboard</span>
    </a>
  </div>

  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-primary" href="dashboard.php">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <div class="dropdown">
          <a class="nav-link text-white  dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa fa-user me-sm-1"></i>
            </div>
            <span class="nav-link-text ms-1">Members Portfolio</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
            <li>
              <a class="dropdown-item" href="add_portfolio.php">
                <span class="nav-link-text ms-1">Add Portfolio</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="manage_portfolio.php">
                <span class="nav-link-text ms-1">Manage Member</span>
              </a>
            </li>
          </ul>
        </div>
      <li>

    </ul>
  </div>

</aside>
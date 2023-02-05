<?php
  session_start();

  include '../connection.php';
  include 'functions.php';

  include 'includes/header.php';
  include 'includes/sidebar.php';
  include 'includes/topbar.php';

  $user_data = check_login($conn);

?>

<div class="container-fluid py-4">
  <div class="row">

    <div class="col-xl-10 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
      <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
            <h3 class="text-white text-primary mb-0">Add Portfolio Details</h3>
          </div>
        </div>
        <div class="card-body">

          <form  method="post" action="upload.php" autocomplete="off" enctype="multipart/form-data">
            <div class="card-body p-0 my-3">

              <div class="row">

                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="firstname">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="e.g Front End Developer" name="title">
                  </div>
                </div>
              </div>

              <div class="form-group mb-0 mt-md-0 mt-4">
                <div class="input-group input-group-static mb-4">
                  <label>Skills</label>
                  <input name="skills" class="form-control" id="message" rows="3" placeholder="Describe your skills"></input>
                </div>
              </div>

              <div class="form-group is-empty is-fileinput">
                <label>Add Image</label>
                  <input type="file" id="inputFile4" name="my_image" required>
              </div>

              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" name="submit" value="Upload" class="btn bg-gradient-primary mt-3 mb-0">Add</button>
                </div>
              </div>

            </div>
          </form>
          
        </div>
      </div>
    </div>

  </div>
  <?php
  include 'includes/footer.php';
  ?>
</div>
</main>

<div class="fixed-plugin">
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3">
      <div class="float-start">
        <h5 class="mt-3 mb-0">Dashboard Settings</h5>
        <p>Dashboard options.</p>
      </div>
      <div class="float-end mt-4">
        <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
          <i class="material-icons">clear</i>
        </button>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="card-body pt-sm-3 pt-0">
      <!-- Sidebar Backgrounds -->
      <div>
        <h6 class="mb-0">Sidebar Colors</h6>
      </div>
      <a href="javascript:void(0)" class="switch-trigger background-color">
        <div class="badge-colors my-2 text-start">
          <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
          <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
        </div>
      </a>
      <!-- Sidenav Type -->
      <div class="mt-3">
        <h6 class="mb-0">Sidenav Type</h6>
        <p class="text-sm">Choose between 2 different sidenav types.</p>
      </div>
      <div class="d-flex">
        <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
        <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
      </div>
      <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
      <!-- Navbar Fixed -->
      <div class="mt-3 d-flex">
        <h6 class="mb-0">Navbar Fixed</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
      </div>
      <hr class="horizontal dark my-3">
      <div class="mt-2 d-flex">
        <h6 class="mb-0">Light / Dark</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
        </div>
      </div>
      <hr class="horizontal dark my-sm-4">
    </div>
  </div>
</div>


<?php
include 'includes/scripts.php';
?>
</body>

</html>
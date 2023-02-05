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
    <div class="col-12">
      <div class="card my-4">

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Members Table</h6>
          </div>
        </div>

        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">

            <?php
            $query = "SELECT * FROM tblportfolio";
            $query_run = mysqli_query($conn, $query);
            ?>
            <table class="table align-items-center mb-0">

              <colgroup>
                <col width="20%">
                <col width="15%">
                <col width="10%">
                <col width="45%">
              </colgroup>

              <thead>
                <tr>
                  <th class=" text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Full Names</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">Title</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Skills</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>

              <tbody>
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                  while($row = mysqli_fetch_assoc($query_run)){
                ?>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="images/<?php echo $row['Image']?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm"><?php  echo $row['lastName'];?> <?php  echo $row['firstName'];?></h6>
                          <p class="text-xs text-secondary mb-0">name@gmail.com</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0"><?php  echo $row['title'];?></p>
                    </td>

                    <td class="align-middle text-center text-sm">
                      <p class="text-xs font-weight-bold mb-0"><?php  echo $row['skills'];?></p>
                    </td>

                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?php  echo $row['CreationDate'];?></span>
                    </td>

                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                      </a>
                    </td>

                  </tr>

                <?php
                  }
                } else {
                  echo "No Record Found";
                }
                ?>
              </tbody>

            </table>

          </div>
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
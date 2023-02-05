<?php
  session_start();

  include '../connection.php';
  include 'functions.php';

  include 'includes/header.php';
  include 'includes/sidebar.php';
  include 'includes/topbar.php';

  $user_data = check_login($conn);

  if(isset($_POST['submit']) && isset($_FILES['image'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $title=$_POST['title'];
    $skills=$_POST['skills'];
    $image=$_POST['image'];
    $image=$_FILES["image"]["name"];

    // get the image extension
    $extension = substr($image,strlen($image)-4,strlen($image));
    // allowed extensions
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if(!in_array($extension,$allowed_extensions)){
      echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    }
    else {
      //rename the image file
      $newimage=md5($image).time().$extension;
      // Code for move image into directory
      move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$newimage);

      $query=mysqli_query($conn, "INSERT INTO  tblportfolio(lastName, firstName, title, skills, Image) VALUES ('$firstname','$lastname','$title','$skills','$newimage')");
      if ($query){
        echo "<script>alert('Portfolio has been added.');</script>"; 
    		echo "<script>window.location.href = 'add_portfolio.php'</script>";
      }
      else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
      }
    }
  }

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

          <form  method="post" autocomplete="off">
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
                  <input type="file" id="inputFile4" id="image" name="image">
              </div>

              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" name="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                </div>
              </div>

            </div>
          </form>
          
        </div>
      </div>
    </div>

  </div>
</div>


<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
</body>

</html>
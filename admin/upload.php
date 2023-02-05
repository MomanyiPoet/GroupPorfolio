<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "../connection.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $title=$_POST['title'];
    $skills=$_POST['skills'];

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
	$img_ex_lc = strtolower($img_ex);

	$allowed_exs = array("jpg", "jpeg", "png");

	if (in_array($img_ex_lc, $allowed_exs)){
		$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
		$img_upload_path = 'images/'.$new_img_name;
		move_uploaded_file($tmp_name, $img_upload_path);

		// Insert into Database
		$sql = "INSERT INTO tblportfolio(lastName, firstName, title, skills, Image) 
				VALUES('$lastname','$firstname','$title','$skills','$new_img_name')";
		mysqli_query($conn, $sql);
		header("Location: manage_portfolio.php");
	}
	else {
		$em = "You can't upload files of this type";
		header("Location: add_portfolio.php?error=$em");
	}
}
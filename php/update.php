<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
        $element = validate($_POST['element']);
        $address = validate($_POST['address']);
        $number = validate($_POST['number']);
	$email = validate($_POST['email']);
        $password = validate($_POST['password']);
	$id = validate($_POST['id']);

	if (empty($name)) {
		header("Location: ../update.php?id=$id&error=Name is required");
	}else if (empty($element)) {
		header("Location: ../update.php?id=$id&error=Element is required");
        }else if (empty($address)) {
		header("Location: ../update.php?id=$id&error=Address is required");
        }else if (empty($number)) {
		header("Location: ../update.php?id=$id&error=Number is required");
        }else if (empty($email)) {
		header("Location: ../update.php?id=$id&error=Email is required");
	}else if (empty($password)) {
		header("Location: ../update.php?id=$id&error=Password is required");
	}else {

       $sql = "UPDATE users
               SET name='$name', element='$element', number='$number', address='$address', email='$email', password='$password'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}
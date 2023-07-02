<?php 

if (isset($_POST['create'])) {
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

	$user_data = 'name='.$name. 'element='.$element. 'address='.$address. 'number='.$number. 'email='.$email. '&password='.$password;

	if (empty($name)) {
		header("Location: ../index.php?error=Name is required&$user_data");
	}else if (empty($element)) {
		header("Location: ../index.php?error=Element is required&$user_data");
    }else if(empty($address)) {
		header("Location: ../index.php?error=Address is required&$user_data");
	}else if(empty($number)) {
		header("Location: ../index.php?error=Number is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
	}else if (empty($password)) {
		header("Location: ../index.php?error=Password is required&$user_data");
	}else {

       $sql = "INSERT INTO users(name, element, address, number, email, password) 
               VALUES('$name', '$element', '$address', '$number', '$email', '$password')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
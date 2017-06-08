<?php 
	if (isset($_POST['user']) && isset($_POST['password'])){
		userlogin();
	}
	else {
		echo "Invalid Parameter";
	}

	function userlogin(){
		$user = test_input($_POST['user']);
		$password = test_input($_POST['password']);
		if($user=='flamelite' && $password=='1234')
			echo 1;
		else echo "Wrong username or password!";
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>
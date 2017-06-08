<?php 
	if (isset($_POST['AdministraterPassword']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password']) && isset($_POST['duration'])){
		require("dbconnect.php");
        $key = $_POST['AdministraterPassword'];
        if($key=="123"){
            configuredb($conn);
            registeruser($conn);
        }
        else echo "Wrong Admin password!";
        $conn->close();
	}
	else echo "Please Enter Valid User type.";
	
	
function configuredb($conn){
	// Create database
	// sql to create user table
	$sql = "CREATE TABLE IF NOT EXISTS user (
	sdt TIMESTAMP,
    username VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
	password VARCHAR(15) NOT NULL, 
    mobile INT(11) NOT NULL,
    duration INT(3) NOT NULL,
    status TINYINT(1) NOT NULL
	)";
	if(!$conn->query($sql))
	   echo "Error creating table: " . $conn->error;	
}
	
	
	function registeruser($conn){
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $user = $_POST["username"];
        $password = $_POST["password"];
        $duration = $_POST["duration"];
        $sql = "INSERT INTO user (username,email, mobile,password,duration,status)
        VALUES ('".$user."', '" . $email . "', '" . $mobile . "','" . $password . "', '" . $duration . "','1')";
        if($conn->query($sql)){
        	echo "Successfully registered!";
        	//confirmEmail($message,);
        }
        else echo "User ID already exists!";
	}

?>
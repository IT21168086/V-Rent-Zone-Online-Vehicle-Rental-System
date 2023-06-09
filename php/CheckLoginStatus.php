<?php

require ("config.php");

session_start();

if(isset($_SESSION["UserLogin"])) { //Already logged in

	$User = $_SESSION['UserLogin'];

	$SQLquery = "SELECT User_ID FROM user_data WHERE User_Email='$User'";
	$Session_SQL = mysqli_query($newConnection, $SQLquery);
	$row = mysqli_fetch_assoc($Session_SQL);
	//$Session_LoginCheck = $row['User_Email'];
	$User = $row["User_ID"]; //Use the session value
	header("Location:../html/UserProfile.php?ID=$User");
}

else {// Not logged in
	header("Location:../html/Login.html"); //Redirect to the login page
}

?>
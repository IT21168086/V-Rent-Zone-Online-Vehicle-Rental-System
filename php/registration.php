<?php
	if(isset($_POST["regButton"])){
		$FName = $_POST['FirstName'];
		$LName = $_POST['LastName'];
		$BDay = $_POST['BD'];
		$Tele = $_POST["tel"];
		$UAddress = $_POST["UserAddress"];
		$UEmail = $_POST["email"];
		$PW = $_POST["psw"];
		
		require ("config.php");
		
		$toSQLuser = "INSERT INTO user_data(First_Name,Last_Name,User_Telephone,User_Address,User_Email,User_Password) VALUES('$FName','$LName','$Tele','$UAddress','$UEmail','$PW')";
		
		
		
		if($newConnection->query($toSQLuser)){
			echo "Inserted successfully";
		}
		else{
			echo "Error: ".$newConnection->error;
		}
		
		/*$id = mysqli_query($newConnection,"SELECT User_ID FROM user_data WHERE User_Email=$UEmail");
		
		header("Location:UserProfile.php?id=$id");*/
		
		$newConnection->close();
	}
?>
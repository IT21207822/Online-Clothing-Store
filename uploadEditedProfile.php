<?php
//starting session for uploading edited profile
session_start();

// if(!isset($_SESSION["currentUser"])){
// 	header("Location: ../html/login.html");
// }
// else{
//starting the connection with the database
	global $con;
	$userName = $_SESSION["username"];

	$con = new mysqli("localhost", "root", "", "fashionlanka");
	$sqlCmd = "SELECT * FROM customer ";
	$resultSet = $con->query($sqlCmd);
	$row = $resultSet->fetch_assoc();

	


	$newFN = $_POST["newFirstName"];
	$newLN = $_POST["newLastName"];
	$newCN = $_POST["newContactNumber"];
	$newUN = $_POST["newUserName"];

	$sqlCmd = "UPDATE customer SET First_name = '$newFN', Last_name = '$newLN', Contact = '$newCN', user_Name = '$newUN'" ;
	$con->query($sqlCmd);


	$con->close();
//redirecting to the userprofile page
	header("Location: userProfile.php");
//}
?>
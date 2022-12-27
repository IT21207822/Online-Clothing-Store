<?php

//data insertion to the database --------------

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$mail=$_POST['mailID'];
$country=$_POST['country'];
$description = $_POST['feedbackDescription'];

// ()

//database connection
global $con;
$con = new mysqli("localhost", "root", "", "fashionlanka");
$sqlCmd = "SELECT * FROM reviews";
$resultSet = $con->query($sqlCmd);



$sqlCmd = "INSERT INTO reviews(firstName, lastName, mailID, country, description) VALUES('$firstName', '$lastName', '$mail', '$country', '$description')";

//sending a message if record is successful

if ($con->query($sqlCmd) === TRUE) {
  echo "Thank you for your feedback";
  header("Location: Home page.html");
} else {
  echo "Error: " . $sqlCmd . "<br>" . $con->error;
}


$con->close();

?>
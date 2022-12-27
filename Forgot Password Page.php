<?php
	session_start();
	
	//creting connection
	require 'config.php';
	
	$uname = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "UPDATE customer SET Pswrd='$password' WHERE User_name='$uname' ";
	
	if($conn->query($sql) == TRUE)
	{
		echo "Password changed Successfully!";
		
	}
	else
	{
		echo "Oops! Error While Changing Password";
	}

	header("Location: Login Page.php");
	
	$conn-> close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/Forgot Password Page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="Register Page.js"></script>
    </head>

    <body>
        <div class="header">
            <div class="row2">
                <div class="column2">
                    <img id="logo" src="Logo.png" alt="This is the Company Logo">
                </div>

                <div class="column2">
                    <div class="title"><h1>Fashion Lanka Clothing Store</h1></div>
                </div>
            </div>
        </div>
        
        <ul id="navigator">
            <li><a href="Home Page.php>">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="Branch Page.php">Branches</a></li>
            <li style="float: right;"><a href="Register.html">Register</a></li>
            <li style="float: right;"><a href="Login Page.html">Login</a></li>
        </ul>

        <h3>Change The Password</h3>
        
        <div class="container">
            <form action="Forgot Password Page.php" method="POST" onsubmit="return checkPassword()">
                <div class="row3">

                    <div class="column3">
                        <label for="username">User Name: </label>
                    </div>
                    <div class="column4">
                        <input type="text" id="username" name="username" placeholder="john23"  required>
                    </div>

                    <div class="column3">
                        <label for="password">Create a new password:</label>
                    </div>
                    <div class="column4">
                        <input type="password" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    </div>

                    <div class="column3">
                        <label for="password">Re-enter password:</label>
                    </div>
                    <div class="column4">
                        <input type="password" id="cnfrmpwd" required>
                    </div>

                    <div class="column3">
                        <br><input type="checkbox" id="checkbox" class="inputstyle" onclick="enableButton()">Accept Terms & Conditions
                    </div>

                    <div class="column3">
                        <br><p><b>Don' t Have an Account ?</b></p>
                        <a id="create" href="Register Page.html">Create Account</a></li>
                    </div>

                </div>

                <div class="row">
                    <input type="submit" name="register" id="submitBtn" value="Update" disabled>
                </div>
            </form>
        </div>


        <footer>
            <div class="row">
                <div class="column">
                <ul>  
                    <h2><b>Help</b></h2>
                    <h5><div>FAQ</div>
                    <div>Return policy</div>
                    <div>Payments</div></h5>			
                </ul>
             </div>

             <div class="column">
                <ul>  
                    <h2><b>Account</b></h2>
                    <h5><div>Register</div>
                    <div>Log In</div></h5>
                </ul>
             </div>

            <div class="column">
                <h2><b>Social Media Links</b></h2>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-linkedin"></a>
            </div>

             <div class="column">
                <ul>  
                    <h2><b>Opening Hours</b></h2>
                    <h5><div>Everyday : 9.00am -9.00p.m</div>
                    </h5>
                </ul>
             </div>
             <div class="column">
                <ul>  
                    <h2><b>Contact Us</b></h2>
                    <h5><div>Telephone: +94714556766 </div>
                    <div>E-mail: fashionlanka@gmail.com</div>
                    <div>Address: 35/D ,Kandy Road, Malabe</div></h5>
                                   
                </ul>
             </div>
             
           </div>
        </footer>
    </body>
</html>
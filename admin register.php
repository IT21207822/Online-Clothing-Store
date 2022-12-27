<?php 

include 'config1.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index_ad.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/administrator.css">

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
            <li><a href="Home Page.html">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="About Us.html">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li style="float: right;"><a href="Register Page.html">Register</a></li>
            <li style="float: right;"><a href="#">Login</a></li>
            <li style="float: right;"><a href="#" class="fa fa-user-circle"></a></li>
        </ul>

        <section class="mockup-form">
            <div class="container">
                <!-- /form -->
                <div class="workinghny-form-grid">
                    <div class="main-mockup">
                    
                        <div class="form align-self">
                            <div class="left_grid_info">
                                <img src="images/images.jpg" alt="">
                            </div>
                        </div>
                        <div class="content-wthree">
                            <h2>Register Now</h2>
                            <p> Register now as a admin </p>
                            <?php echo $msg; ?>
                            <form action="" method="post">
                                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                                <button name="submit" class="btn" type="submit">Register</button>
                            </form>
                            <div class="login-register">
                                <p class="login-register-text">Have an account! <a href="index_ad.php">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //form -->
            </div>
        </section>
        
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
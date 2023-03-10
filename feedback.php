
<!DOCTYPE html>    
<html>    
<head>
        <title>Fashion Lanka Clothing Store</title>
        <meta charset="uth-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body style="background-image:url(img/bg2.jpg)">




<div class="row3">
  <div class="column4" style="background-image: url(imgs/header2.jpg)">
   <img id="logo" src="imgs/logo2.jpg" alt="This is the Company Logo"> 
   
  </div>
  <div class="column3" style="background-image: url(imgs/header2.jpg)">
    <h1>Fashion Lanka Clothing Store</h1>
  </div>
  <div class="column5" style="background-image: url(imgs/header2.jpg)">
   <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 100px;"></i>
   <div class="logoutbtn"><button>Log Out</button></div>
  </div>
</div>
        

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Products</a>
  <a href="#contact">About Us</a>
  <a href="#contact">Contact Us</a>
  <input type="text1" placeholder="Search..">
</div>

        <hr class="rounded">
    
   
<div class="feedback"><center><h2>FEED BACK FORM</h2></center></div>    
<div class="container" style="background-color:rgb(173,216,230);">    
  <form id="addfeedback" method="post" action="feedback_upload.php">    
    <div class="row1">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text2" id="firstName" name="firstName" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row1">    
      <div class="col-25">    
        <label for="lname">Last Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text2" id="lastName" name="lastName" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row1">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email2" id="mailID" name="mailID" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row1">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option> 
          <option value="Srilanka">Srilanka</option>   
        </select>    
      </div>    
    </div>    
    <div class="row1">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="feedbackDescription" id="feedbackDescription" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row1">    
      <a href="Home Page.html"></a><input type="submit" value="Submit">    
    </div>    
  </form>    
</div>

<hr class="rounded">


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
             <div class="column">
               <h2><b>Social Media Links</b></h2>
               <a href="#" class="fa fa-facebook"></a>
               <a href="#" class="fa fa-twitter"></a>
               <a href="#" class="fa fa-instagram"></a>
               <a href="#" class="fa fa-google"></a>
             </div>
           </div>
        </footer>  
    
</body>    
</html>    
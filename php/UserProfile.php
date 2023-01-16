<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
   <link rel="stylesheet" href="..\css\Userprofile.css">
    <script src="..\js\UserProfile.js">
           
			</script>
</head>
<body>
	
    <div class="user">
        <a href="#"><img src="..\image\user.jpg" width="150" height="100" />
			<label id="userid">amal@123</label>
    </div>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hasa&Sons</h2>
            </div>


            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="./Userprofile.php">MY PROFILE</a></li>
                    <li><a href="../CustomCare.html">CUSTOMER CARE</a></li>
                    <li><a href="../contactUs.html">CONTACT US </a></li>
                    <li><a href="../aboutUs.html">ABOUT</a></li>

                </ul>
            </div>
		
		
        </div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<!--Division start-->
	<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell">
<div class="content"> 
		<br></br>
		<br></br>
		<br></br>
		<div class ="button">
		 <button class="cn"><a href="#">PAYMENT</a></button><br></br>
		  <button class="cn"><a href="./Edit.php">EDIT</a></button><br></br>
		   <button class="cn"><a href="./Promotions.html">PROMOTIONS</a></button><br></br>
			</div >
	</div>
	
</div>

<div class="divTableCell">

	
<div class="form">

                <h2>Contact Details</h2>
		
<?php
// Create connection
$con =mysqli_connect('localhost','root','','userdb');
if(!$con){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($con,"SELECT name,email,Mnumber,dob,gtype FROM user_details WHERE Username='amal@123'");
$row= mysqli_fetch_array($result);
?>

               <input type="text" name="name" value="<?php echo $row["name"]; ?>">
			
                <input type="text" name="email" value="<?php echo $row["email"]; ?>">
		
                <input type="datetime" name="phone" value="<?php echo $row["Mnumber"]; ?>">
			
                <input type="datetime" name="dob" value="<?php echo $row["dob"]; ?>">
	
				<input type="datetime" name="gtype" value="<?php echo $row["gtype"]; ?>">
	
			
				<!--<form name="RegForm" "UserProfile.php" onsubmit="return Validation()" method="POST" >
        <input type="text" size="65" name="name" placeholder="Name" />
		<br><br><br>
		<input type="text" size="65" name="email" placeholder="Email Address" />
		<br><br><br>
		 <input type="text" size="65" name="phone" placeholder="Mobile nubmber"/>
		 <br><br><br>
        <input type="text" size="65" name="dob" placeholder="Date of Birth"/>
        <br><br><br>
        <input type="text" size="65" name="gender"placeholder="Gender" />
        <br><br><br>
       
  
            <button class="submit" 
                   value="send" name="Submit" /><a>SUBMIT</a></button>
	
		
    
	</form>-->
	
				


<!--<div class="mail">
<button class="cn"><a>SUBMIT</a><input type="submit" onclick="ValidateEmail(document.form1.text1)"/></button>
</div>
<script src="email-validation.js"></script>-->

				
            
            </div>
				
</div>
	
	
			</div>

			
</div>
</div>
</div>
	
<!--Division End-->


	 <div class="main-wrap">
        <div class="footer-wrap">
            <div class="footer-wrap-1">
                <div class="footer-section">
                    <h1>About</h1>
                    <a href="#">Services</a>
                    <a href="#">Profiles</a>
                    <a href="#">Pricing</a>
                    <a href="#">Drivers</a>
                </div>
                <div class="footer-section">
                    <h1>Resources</h1>
                    <a href="#">Maps</a>
                    <a href="#">Tips</a>
                    <a href="#">Virtual tours</a>
                    <a href="#">Videos</a>
                </div>
                <div class="footer-section">
                    <h1>Contact</h1>
                    <a href="#">Help</a>
                    <a href="#">Feedback</a>
                    <a href="#">Report</a>
                </div>
                <div class="footer-section">
                    <h1>Stay Connected</h1>
                    <p>Subscribe to our sms alert system.</p>
                    <form action="">
                        <input type="email" name="email" id="email" placeholder="Enter Email Address">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
			
            <div class="footer-wrap-2">
                <div class="line"></div>
                <div class="social-link">
                    <a href="#">
                        <img src="../image/fb.png" alt="Facebook">
                    </a>
                    <a href="#">
                        <img src="../image/google.png" alt="Google">
                    </a>
                    <a href="#">
                        <img src="../image/linkedin.png" alt="linkedin">
                    </a>
                    <a href="#">
                        <img src="../image/twitter.png" alt="twitter">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="first-box">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="last-box">
                <a href="#">&copy; Copyright 2022 Hasa&sons pvt.ltd </a>
            </div>
        </div>
    </div>




    
</body>
</html>
	
	
	
	
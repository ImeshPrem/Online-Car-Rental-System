<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
   <link rel="stylesheet" href="..\css\Edit.css">
   
           
<script>
var loadFile = function(event) {
	var image = document.getElementById('usertest');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
			
</head>
<body>
    <div class="user">
        <a href="#"><img src="..\image\user.jpg" width="150" height="100" id ="usertest"/>
		 <input type="text" name="userid" placeholder="username" value="amal@123" >

    </div>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Hasa&Sons</h2>
            </div>


            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="./UserProfile.php">MY PROFILE</a></li>
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
		  <button class="cn"><a href="./Edit.html">EDIT</a></button><br></br>
		   <button class="cn"><a href="./Promotions.html">PROMOTIONS</a></button><br></br>
		    <button class="cn"><a href="#">PREVIOUS TRIPS</a></button><br></br>
			</div >
	</div>
	
</div>

<div class="divTableCell">

<?php
$conn =mysqli_connect('localhost','root','','userdb');
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user_details set name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', Mnumber='" . $_POST['phone'] . "', gtype='" . $_POST['gtype'] . "'  WHERE Username='amal@123'");
$message = "User updated Successfully";
}

$result = mysqli_query($conn,"SELECT name,email,Mnumber,dob,gtype FROM user_details WHERE Username='amal@123'");
$row= mysqli_fetch_array($result);
?>
	
<div class="form">
               <h2>Contact Details</h2>
			   
	
	<form method="POST" action="">
	
<?php if(isset($message)) { echo $message; } ?>	<br>


               <input type="text" name="name" placeholder="Name" value="<?php echo $row['name']; ?>" >
			   </br></br></br>
                <input type="text" name="email" placeholder="Email Address" value="<?php echo $row['email']; ?>">
				</br></br></br>
                <input type="datetime" name="phone" placeholder="Mobile nubmber" value="<?php echo $row['Mnumber']; ?>">
				</br></br></br>
                <input type="datetime" name="dob" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>">
				</br></br></br>
				<input type="datetime" name="gtype" placeholder="Gender" value="<?php echo $row['gtype']; ?>">
				</br></br></br></br>
				<p> Upload Your Photo Below </p>
				
				<input type="file" accept="image/*" onchange="loadFile(event)"  text="Upoload Your Photo"/>
				</br></br></br></br>

				
				<button class="cn" type="submit" name="submit" value="submit" ><a>UPDATE</a></button>
				
				
				</form>
				
				<!--form name="RegForm" action="/submit.php" 
          onsubmit="return GEEKFORGEEKS()" method="post">
        <input type="text" size="65" name="name" placeholder="Name" />
        <br />
		<input type="text" size="65" name="email" placeholder="Email Address" />
        <br />
		 <input type="text" size="65" name="phone" placeholder="Mobile nubmber"/>
		 <br />
        <input type="text" size="65" name="dob" placeholder="Date of Birth"/>
        <br />
        <input type="text" size="65" name="gender"placeholder="Gender" />
        
       
  
            <button class="submit" 
                   value="send" name="Submit" /><a>SUBMIT</a></button>
				  

        </p>
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
	
	
	
	
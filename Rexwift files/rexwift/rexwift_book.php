<!DOCTYPE html>
<html>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-book car</title>
</head>

<body>
<div class="Navibar"> 
<img src="Rexlogo.jpg"> 
<?php
include 'config.php';
$sel = "SELECT * FROM rclient  WHERE email = '$email' AND pass = '$pass'";
$rs = $conn->query($sel);
if($_SESSION['email'] && ($_SESSION['pass'])){
?>
<ul>
<li><a href="rexwift_logout.php">LOG OUT</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
<div>
<a href="editclient.php" style="text-decoration:none; color:white;">Change password</a><br>
<a href="deleteclient.php"style="text-decoration:none; color:white;">Delete my account</a>
</div>
<?php
	} else{
?>
<ul>
<li><a href="rexwift_login.php">LOGIN</a></li>
<li><a href="rexwift_signup.php">SIGN UP</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
<?php
	}
?>
</div><br><br><br><br>


<script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var fname = document.contactForm.fname.value;
	var lname = document.contactForm.lname.value;
	var mobile = document.contactForm.mobile.value;
	var city = document.contactForm.city.value;
	var car = document.contactForm.car.value;
    
	// Defining error variables with a default value
    var fnameErr = lnameErr = mobileErr = cityErr = carErr = true;
    
    // Validate name
    if(fname == "") {
        printError("fnameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(fname) === false) {
            printError("fnameErr", "Please use alphabets");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }
	
	if(lname == "") {
        printError("lnameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(lname) === false) {
            printError("lnameErr", "Please use alphabets");
        } else {
            printError("lnameErr", "");
            lnameErr = false;
        }
    }
	
	// Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    	
	// Validate city
    if(city == "Select") {
        printError("cityErr", "Please select your city");
    } else {
        printError("cityErr", "");
        cityErr = false;
    }
	
	// Validate car
    if(car == "Select") {
        printError("carErr", "Please select your car");
    } else {
        printError("carErr", "");
        carErr = false;
    }

    
    // Prevent the form from being submitted if there are any errors
    if((fnameErr || lnameErr || mobileErr || cityErr || carErr ) == true) {
       return false;
    } else {
        var dataPreview = "Your form has succcessfully been submitted!"                 
        alert(dataPreview);
    }
};

</script> 

<center>
<div class="book">

<form name="contactForm" onsubmit="return validateForm()" method="post">
    <h1>RENT A CAR</h1><br>
	<h3>Plan your journeys with self drive car rentals from Rexwift and enjoy the freedom of going anywhere at any time.</h3>
	<br><br>
	
    <div class="row">
        <label>First Name :</label><br>
        <input type="text" name="fname">
        <div class="error" id="fnameErr"></div>
    </div>
	<br>
	
	<div class="row">
        <label>Last Name :</label><br>
        <input type="text" name="lname">
        <div class="error" id="lnameErr"></div>
    </div>
	<br>
	
	<div class="row">
        <label>Mobile Number</label><br>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>
	<br>	
    
	<div class="row">
        <label>City :</label><br>
        <select name="city">
            <option>Select</option>
            <option value="chn">Chennai</option>
            <option value="blore">Bangalore</option>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
	        <option value="hyd">Hyderabad</option>
	        <option value="pune">Pune</option>
	        <option value="kol">Kolkata</option>
        </select>
        <div class="error" id="cityErr"></div>
    </div>
	<br>
	
	<div class="row">
        <label>Pickup Date :</label><br>
        <input type="date" name="pdate" required value="<?php echo date('Y-m-d'); ?>">
        <div class="error" id="pdateErr" ></div>
    </div>
	<br>
	
	<div class="row">
        <label>Return Date :</label><br>
        <input type="date" name="rdate" required value="<?php echo date('Y-m-d'); ?>">
        <div class="error" id="rdateErr"></div>
    </div>
	<br>
	
	<div class="row">
        <label>Car Type :</label><br>
        <select name="car">
            <option>Select</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="MUV">MUV</option>
	        <option value="Luxury">Luxury</option>
        </select>
        <div class="error" id="carErr"></div>
    </div>
	<br><br>
<?php
	if($_SESSION['email'] && ($_SESSION['pass'])){
?>	
    <div class="row">
        <a href="rexwift_payment.php" style="text-decoration: none;"><input type="submit" value="BOOK" name="bookcar"></a>
    </div>
	</form>
	<?php
					} else
						{
							echo"<label><font color=red>Please log in to book your car</font></label>";
						}
	?>
	
	<?php
						if(isset($_POST['bookcar'])){
							include 'config.php';
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$mobile = $_POST['mobile'];
							$city = $_POST['city'];
							$pdate = $_POST['pdate'];
							$rdate = $_POST['rdate'];
							$car = $_POST['car']; 
							
							$qry = "INSERT INTO rbook (firstname,lastname,mobile,city,pdate,rdate,car)
							VALUES('$fname','$lname','$mobile','$city','$pdate','$rdate','$car')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"rexwift_payment.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"rexwift_book.php\")
											</script>";
							} 
						}
						
	 ?>							
</div>
</center>
<br><br><br><br><br><br>

<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="rexwift_contact.php">CONTACT US</a></li>
<li><a href="rexwift_feedback.php">FEEDBACK</a></li>
</ul>
</div>
</body>
</html>
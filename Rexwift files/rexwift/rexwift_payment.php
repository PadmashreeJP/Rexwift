<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="Rexwift.css">
<title>REXWIFT-payment</title>
</head>
<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<body style="background-color: #e6f7ff;">

<div class="Navibar"> 
<img src="Rexlogo.jpg"> 
<?php
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
    var cardno = document.checkout.cardno.value;
	var cardname = document.checkout.cardname.value;
	var expiry = document.checkout.expiry.value;
	var cvv = document.checkout.cvv.value;
    
	// Defining error variables with a default value
    var cnoErr = cnameErr = expErr = cvvErr  = true;
    
    // Validate card name
    if(cardname == "") {
        printError("cnameErr", "Please enter your name in the card");
    } else {
        var regex = /^[a-zA-Z\s]+$/;                
        if(regex.test(cardname) === false) {
            printError("cnameErr", "Please use alphabets");
        } else {
            printError("cnameErr", "");
            cnameErr = false;
        }
    }
	//Validate expiry date
	if(expiry == "") {
        printError("expErr", "Please enter your expiry date");
    } else {
            printError("expErr", "");
            expErr = false;
        }
    
	
	
	// Validate card number
    if(cardno == "") {
        printError("cnoErr", "Please enter your card number");
    } else {
        var regex = /^[1-9]\d{11}$/;
        if(regex.test(cardno) === false) {
            printError("cnoErr", "Please enter a valid 12 digit card number");
        } else{
            printError("cnoErr", "");
            cnoErr = false;
        }
    }
    
// Validate cvv number
    if(cvv == "") {
        printError("cvvErr", "Please enter your cvv number");
    } else {
        var regex = /^[1-9]\d{2}$/;
        if(regex.test(cvv) === false) {
            printError("cvvErr", "Please enter a valid 3 digit cvv number");
        } else{
            printError("cvvErr", "");
            cvvErr = false;
        }
    }	
	

    
    // Prevent the form from being submitted if there are any errors
    if((cnameErr || cnoErr || cvvErr || expErr ) == true) {
       return false;
    } else {
        var dataPreview = "Waiting for payment to be processed..."                 
        alert(dataPreview);
    }
};

</script>


<center>
<div class="checkout">
  <h1>
    Checkout
  </h1>
  
   <form name="checkout" onsubmit="return validateForm()" method="post">
   <div>
    <input placeholder="Card number" type="text" name="cardno"  />
	<div class="error" id="cnoErr"></div>
	</div><br>
	<div>
	<input placeholder="Name on card" type="text" name="cardname"  />
	<div class="error" id="cnameErr"></div>
	</div><br>
    <div class="half">
      <input placeholder="MM/YY" type="text" name="expiry" /><input placeholder="CVV" type="text" name="cvv" />
	  <div class="error" id="expErr"></div>&nbsp&nbsp&nbsp&nbsp<div class="error" id="cvvErr"></div>
    </div>
    <input type="submit" value="Pay Now" name="checkout"></input>
  </form>
  </div>
  <style>
 h1 {
  color: #00264d;
  text-align: center;
}
 form {
  width: 350px;
  margin: 0 auto;
  background:#e6f7ff;
}
 form .half input {
  width: 165px;
  float: left;
}
 form .half input:first-child {
  margin-right: 20px;
}
 form input {
  box-sizing: border-box;
  display: block;
  float: left;
  width: 100%;
  padding: 20px;
  font-size: 1.3em;
  margin-bottom: 20px;
  //outline: none;

}
 form input {
  color: #1C1D21;
}
 form input[type=submit] {
  color: #00264d;
  background: #EEEFF7;
  font-weight: bold;
  border-radius: 2px;
  border-color: #00264d;
} 
input[type="submit"]:hover {
    background: #00264d ;
	color: white;
  }
</style>
<?php
						if(isset($_POST['checkout'])){
							include 'config.php';
							$cno = $_POST['cardno'];
                            $cname = $_POST['cardname'];							
						    $exp = $_POST['expiry'];
							$cvv = $_POST['cvv'];
							
							$qry = "INSERT INTO pay (no,name,expiry,cvv)
							VALUES('$cno','$cname','$exp','$cvv')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Waiting for Admin Approval\");
											window.location = (\"rexthanks.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"rexwift_payment.php\")
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
</ul>
</div>
</body>
</html>
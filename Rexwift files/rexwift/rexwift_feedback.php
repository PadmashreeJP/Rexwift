<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>REXWIFT-Feedback</title>




<div class="Navibar"> 
<img src="Rexlogo.jpg"> 
<ul>
<li><a href="rexwift_login.php">LOGIN</a></li>
<li><a href="rexwift_signup.php">SIGN UP</a></li>
<li><a href="">CARS</a></li>
<li><a href="rexwift_aboutus.php">ABOUT US</a></li>
<li><a href="rexwift_home.php">HOME</a></li>
</ul>
</div><br>

<script>
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
function validateForm()
{
var contact = document.FeedbackForm.contact.value;
var purpose = document.FeedbackForm.purpose.value;
var reservation = document.FeedbackForm.reservation.value;
var pickdrop = document.FeedbackForm.pickdrop.value;
var expectations = document.FeedbackForm.expectations.value;
var rental = document.FeedbackForm.rental.value;
var impression = document.FeedbackForm.impression.value;
var criteria = document.FeedbackForm.criteria.value;

var conerr = purerr = reserr = picerr = experr = renerr = imperr = crierr = true;

	//if (contact==""){
		//alert("Please enter your contact number");
		//return false;

    }

if(purpose == "Choose") {
        printError("purerr","Please select an option");
    } else {
      printError("purerr","");
       purerr = false;
    }
	
if(reservation == "Choose") {
        printError("reserr", "Please select an option");
    } else {
        printError("reserr", "");
        reserr = false;
    }
if(pickdrop == "Choose") {
        printError("picerr", "Please select an option");
    } else {
        printError("picerr", "");
        picerr = false;
    }    
if(expectations == "Choose") {
        printError("experr", "Please select an option");
    } else {
        printError("experr", "");
        experr = false;
    }
if(rental == "Choose") {
        printError("renerr", "Please select an option");
    } else {
        printError("renerr", "");
        renerr = false;
    }
	
if(impression == "Choose") {
        printError("imperr", "Please select an option");
    } else {
        printError("imperr", "");
        imperr = false;
    }	
if(!form.criteria.checked) {
      printError("crierr","Please select atleast one option");
    }else {
	printError("crierr","");
	crierr=false;
	}
    
if ((conerr || purerr || reserr	|| picerr || experr || renerr || imperr || crierr) == true){
return false;
}
else{
	var dataPreview="You've entered the following details : \n"+
				 "Contact Number : " + contact +"\n"+
				 "Purpose of Rental : "+ purpose +"\n"+
				 "Vehicle Reservation Process : "+ reservation +"\n"+
				 "Level of customer service : "+ pickdrop +"\n"+
				 "Based on your experience,you found the vehicle : "+ expectations +"\n"+
				 "Rental Procedure : "+ rental +"\n"+
				 "Overall impression : "+ impression +"\n"+
				 "Criteria to choose a car rental : "+ criteria +"\n"+
				 
	
	alert(dataPreview);
	}
};
</script>
</head>
<body style="background-color:#e6f7ff;">
<br><br><br><br>
<form name="FeedbackForm" onsubmit="return validateForm()" action="rexwift_fbthanks.php" method="POST">
<h1 style="text-align:center">Feedback</h1><br><br>
<div class="row">
<label>Contact Number</label>
<input type="text" name="contact" maxlength="10" required><br>
 <div class="error" id="conerr"></div>
 </div>

<div class="row">
<label>Purpose of Rental</label>
<select name ="purpose">
<option>Choose</option>
<option>Business</option>
<option>Personal/Leisure</option>
<option>Replacement Car</option>
<option>Other</option>
</select><div class="error" id="purerr"></div>
</div><br><br>

<h3>Evaluation Criteria</h3><br>
Evaluate our company based on the following criteria by choosing the answer that is most suitable,according to your judgement,to the degree of your satisfaction.<br><br>
<div class ="row">
<ul>
<label><li>Vehicle Reservation Process</li></label>
<select name ="reservation">
<option>Choose</option>
<option>Very Satisfactory</option>
<option>Satisfactory</option>
<option>Neutral</option>
<option>Dissatisfactory</option>
<option>Very Dissatisfactory</option>
</select><div class="error" id="reserr"></div>
</div><br>

<div class="row">
<label><li>Level of customer service during the vehicle's pick-up and drop-off</li></label>
<select name ="pickdrop">
<option>Choose</option>
<option>Very Satisfactory</option>
<option>Satisfactory</option>
<option>Neutral</option>
<option>Dissatisfactory</option>
<option>Very Dissatisfactory</option>
</select><div class="error" id="picerr"></div>
</div><br>

<div class="row">
<label><li>Based on your expectations,you found the vehicle</li></label>
<select name ="expectations">
<option>Choose</option>
<option>Very Satisfactory</option>
<option>Satisfactory</option>
<option>Neutral</option>
<option>Dissatisfactory</option>
<option>Very Dissatisfactory</option>
</select><div class="error" id="experr"></div>
</div><br>

<div class="row">
<label><li>Rental procedure</li></label>
<select name ="rental">
<option>Choose</option>
<option>Very Satisfactory</option>
<option>Satisfactory</option>
<option>Neutral</option>
<option>Dissatisfactory</option>
<option>Very Dissatisfactory</option>
</select><div class="error" id="renerr"></div>
</div><br>

<div class="row">
<label><li>Overall impression of our company from your rental</li></ul></label>
<select name ="impression">
<option>Choose</option>
<option>Very Satisfactory</option>
<option>Satisfactory</option>
<option>Neutral</option>
<option>Dissatisfactory</option>
<option>Very Dissatisfactory</option>
</select><div class="error" id="imperr"></div>
</div><br>

<h3>Based on what criteria do you choose a Car Rental Company ?</h3>
<input type="checkbox" name="criteria">Reservation Procedure
<input type="checkbox" name="criteria">Customer Service
<input type="checkbox" name="criteria">Vehicle Reliability
<input type="checkbox" name="criteria">Price<br><br><br>

<div class="row1">
<h3>Additional Comments</h3>
<input type="text" name="comment" style="height:100px" placeholder="Leave a comment.." >
</div><br>


<input type="submit" value="SUBMIT"><br><br>
</form>
</body>


<div class="Footer">
<ul>
<p>Copyright©2020 <b>Rexwift</b> All rights reserved.</p>
<li><a href="">CONTACT US</a></li>
</ul>
</div>
</html>
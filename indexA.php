<!DOCTYPE html>
<html>
    
  
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chelsea's Document Classification Test</title>
        <meta name="description" content="my document classification test">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <h1>Chelsea's Document Classification Test</h1>
        <h2>Let's Start!</h2>
        
        <!--
            MADE WITH <3 AND JAVASCRIPT
        -->
        
        <p>
            Welcome to my test, you'll read some documents and be asked to classify them. Please enter your name to begin.
        </p>

<script>

function validateForm() {
    var x = document.forms["getStarted"]["firstname"].value;
    var y = document.forms["getStarted"]["age"].value;
    
    if (x == "" && y == "") {
        alert("Please ensure you have completed both fields");
        return false;
    }
 	else if (x == "") {
  	 	alert ("Please enter your first name");
   		return false;
    }
	else if (y == "") {
    		alert ("Please enter your age");
    	return false;
    } 
	else if(isNaN(y) ||  y >= 100 || y <= 13){
    	alert("Please enter a valid age");
    	return false;
  	}
	else if (!document.forms["getStarted"]["agreesubmit"].checked){
		alert("Please select the checkbox to continue");
    	return false;
  }    
}
</script> 

<form form name="getStarted" action="page1.php" onsubmit="return validateForm()" method="post" >
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  Age:<br>
  <input type="text" name="age" >
  <br><br>
  <input type="checkbox" name="agreesubmit" value="agree"> I agree to continue<br>
  <input type="submit" value="Submit">
</form> 


    </body>
    


        

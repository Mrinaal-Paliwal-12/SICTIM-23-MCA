<?php
 $message_sent = false;
if(isset($_POST['email']) && $_POST['email']!=''){
 
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	 
	 
 
		 //submit the form 
		 $userName=$_POST['name'];
		 $userEmail=$_POST['email'];
		 $messageSubject=$_POST['subject'];
		 $message=$_POST['query'];
		 
		 $to = "yadavsaayli@gmail.com";
		 $body = "Hi ";
		
		 
		 $body .="From: ".$userName. "\r\n";
		 $body .="Email: ".$userEmail. "\r\n";
		 $body .="Message: ".$message. "\r\n";
		 
		 mail($to,$messageSubject,$body);
		 
	     $message_sent = true;
		 
	}
	else{
		
		$invalid_class_name = "form-invalid";
		
	}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: FiraSans-Medium; }
* {box-sizing: border-box;}

input[type=text],[type=email], textarea {
  width:100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  align:center;
}

input[type=submit] {
  background-color: #231f20;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #b7202e;
}

.container {
width:600px;
box-shadow: 3px 3px 3px 3px grey;
margin-left:400px;
background-color: #58595b;
padding-left:10px;	  
padding-bottom:10px;
color:white;
font-size:20px;
}

</style>
</head>
<body>
<?php 
	 
	if($message_sent):
?>
<h3> Your mail has been sent.. kindly check your email </h3>
<?php
	else:
	
?>
<h3 align="center" style="font-size:30px;color:#b7202e" >Contact Form</h3>

<div class="container">
  <form action="contactus.php" method="POST">
    <label for="fname">Name</label><br>
    <input <?= $invalid_class_name ?? "" ?> type="text" id="fname" name="name" placeholder="Your name.." required>
	<br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="email" placeholder="Your Email id" required>
	<br>
   
    <label for="subject">Subject</label><br>
    <input type="text" id="subject" name="subject" placeholder="Your Subject" required>
     <br>
		

    <label for="query">Query</label><br>
    <textarea id="query" name="query" placeholder="Your Query here.." style="height:200px"></textarea>
	
	<br> 
	
    <input type="submit" value="Submit">
  </form>
</div>
<?php
endif;
?>
</body>
</html>

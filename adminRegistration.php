<html>
<head>
<link rel="stylesheet" href="studentRegistration.css">

</head>



<body>

<center><form  method="post">
<h1>Admin Registration</h1>
<br><br>

<pre>Name</pre>
<input type="text" name="fname" class="input" required maxlength="20">
<label></label>
<input type="text" name="mname" class="input" required maxlength="20">
<label></label>
<input type="text" name="lname" class="input" required maxlength="20">
<pre > First Name                  Middle Name              Last Name</pre><br>
<pre></pre>
<input type="date" name="bdate" class="input" required>

<input type="tel" name="phone" class="input" required minlength="10" maxlength="16">

<input type="email" name="email" class="input" required maxlength="20"><br>

<pre>Birth                  Phone No.              Email</pre><br>

  
  
  <pre>Address</pre>
<input type="text" name="city" class="input" required maxlength="20">

<input type="text" name="region" class="input" required maxlength="20">

<input type="text" name="state" class="input" required maxlength="20"><br>

<pre>City                 Region              State</pre><br>

<pre>New Password:</pre>
<input type="Password" name="pass1" class="input" required minlength="4" maxlength="20">
<pre>Confirm Password:</pre>
<input type="Password" name="pass2" class="input" required minlength="4" maxlength="20"><br><br>
<input type="submit" value="Submit" style="width:20%;background-color:grey;"  name="submit" class="input" required>

</form>




</body>




</html>




<?php
$id="";
$fname="";
$mname="";
$lname="";
$bdate="";
$gender="";
$city="";
$region="";
$state="";
$email="";
$pass1="";
$pass2="";
$err=array();
$admin="";

$conn = mysqli_connect("localhost","root","","wcuecms");

if(isset($_POST['submit'])){
	
$fname=mysqli_real_escape_string($conn,$_POST['fname']);
$mname=mysqli_real_escape_string($conn,$_POST['mname']);
$lname=mysqli_real_escape_string($conn,$_POST['lname']);
$bdate=mysqli_real_escape_string($conn,$_POST['bdate']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$region=mysqli_real_escape_string($conn,$_POST['region']);
$state=mysqli_real_escape_string($conn,$_POST['state']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$pass1=mysqli_real_escape_string($conn,$_POST['pass1']);
$pass2=mysqli_real_escape_string($conn,$_POST['pass2']);
//$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$id="";
	
	
	if($pass1!=$pass2){
		
		array_push($err,"The Passwords are not match!");
	}
	
	else {
		$sql= "select * from admin where admin_email='".$email."' limit 1";
		
       
		
		$result=mysqli_query($conn,$sql);
		$admin=mysqli_fetch_assoc($result);
		
		
	
		if(empty($admin['admin_email'])===false){
		
		array_push($err,"The Email number already exist!");
		 }
		 
		 
		 
		 
		else if(count($err)=== 0){
			$query = "insert into admin (admin_fname, admin_mname, admin_lname, admin_bdate, admin_city, admin_region, admin_state, admin_password, admin_email) values ('$fname','$mname','$lname','$bdate','$city','$region','$state',$pass1,'$email')";
			header("Location:adminDashboard.php");
         mysqli_query($conn,$query);
		
		$success="You are successfully registerd!";
		}
			
		
		
		
	}
	
	
	
}


?>

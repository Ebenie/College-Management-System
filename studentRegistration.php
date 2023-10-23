<html>
<head>
<link rel="stylesheet" href="studentRegistration.css">
</head>



<body>


<center><form  method="post" >

<div class="error">
	<?php 
	?>
</div>

<h1>Student Registration Form</h1>
<br><br>

<pre>Name</pre>
<input type="text" class="input" name="fname" required maxlength="20">
<label></label>
<input type="text" class="input" name="mname"required maxlength="20">
<label></label>
<input type="text" class="input" name="lname"required maxlength="20">
<pre > First Name                  Middle Name              Last Name</pre><br>
<pre></pre>
<input type="date" class="input" name="bdate"required>

<input type="tel" class="input" name="phone"required minlength="10" maxlength="16">

<input type="email" class="input" name="email" required maxlength="20"><br>

<pre>Birth                  Phone No.              Email</pre><br>

  
  
  <pre>Address</pre>
<input type="text" class="input" name="city" required min="3" maxlength="20">

<input type="text" class="input" name="region" required maxlength="20">

<input type="text" class="input" name="state" required maxlength="20"><br>

<pre>City                 Region              State</pre><br>


 
<label for="stud_department"> Department: </label>
             <select name="stud_department" id="stud_department" required style="font-size:20px;border-radius:10px;">
                <option value="Software Enginerring">Software Enginerring</option>
                <option value="Computer Science">Computer Science</option>
				<option value="Civil Enginerring">Civil Enginerring</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
				<option value="Electrical Enginerring">Electrical Enginerring</option>
                <option value="Information System"> Information System</option>
				<option value="Construction & Management Enginerring">Construction & Management Enginerring</option>
                <option value="Information Technology">Information Technology</option>
                </select>

<br><br>
<label for="stud_gender">Gender:</label>
    <select name="stud_gender" id="stud_gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        
    </select>
			
                <br>
                <br>

<pre>New Password:</pre>
<input type="Password" class="input" name="pass1" required minlength="4" maxlength="20">
<pre>Confim Password:</pre>
<input type="Password" class="input" name="pass2" required required minlength="4" maxlength="20"><br><br>
<input type="submit" class="login" name="submit" value="Submit"   >
</form>









</body>




</html>



<?php
session_start();

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
$student="";

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
		$sql="select * from student where stud_email='".$email."' limit 1";
		
       
		
		$result=mysqli_query($conn,$sql);
		$student=mysqli_fetch_assoc($result);
		
		
	
	if(empty($admin['stud_email'])===false){
		
		array_push($err,"The Email number already exist!");
		 }
		 
		 
		 
		 
		else if(count($err)===0){
			$query="insert into student (stud_fname, stud_mname, stud_lname, stud_bdate, stud_city, stud_region, stud_state, password, stud_email) values ('$fname','$mname','$lname','$bdate','$city','$region','$state','$pass1','$email')";
		    $_SESSION['id']=$id;
			header("Location:studentLogin.php");




         mysqli_query($conn,$query);
		
		$success="You are successfully registerd!";
		}
			
		
		
		
	}
	
	
	
}


?>


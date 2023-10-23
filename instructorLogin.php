
<?php
session_start();

	
	$id="";
	$password="";
	$err="";
	//database connection
	//
	
	$conn = mysqli_connect("localhost","root","","wcuecms");
	
	if(isset($_POST['login'])){
	 $id=mysqli_real_escape_string($conn,$_POST['id']);
	 $password=mysqli_real_escape_string($conn,$_POST['pass1']);
	 $sql="select * from instructor where instruct_id = '".$id." ' and password='".$password."' limit 1";
	 $result = mysqli_query($conn,$sql);
	 
	 if(empty($id)){
		 
		$err="User id is required!"; 
	 }
	 else if(empty($password)){
		 
    	$err="User password  is required!"; 
	 }
	 
	 else if(mysqli_num_rows($result) == 1){
		$_SESSION['id']=$id;
		 header('location: instructorDashboard.php');
   
	 }

 
	else {
		
		$err="Your Id and Passwords do not match!";
	}
	
	
	
	}

	


else
{




	
}



?>




<html>
<head>
<link rel="stylesheet" href="instructorLogin.css">

</head>

<script rel="javascript" src="validation.js"></script>

<body>

<center><form  name="loginForm" method="post" onsubmit="return validateForm();"><br><br>
<div class="login-type"></div>
            <div class="error" id="error">
                <?php echo $err; ?>
            </div>
<br><br>
<label>Lecturer ID:</label>
<input type="text" name="id"><br><br>


<label>Password:</label>
<input type="Password" name="pass1" placeholder="***********"><br><br>
<input type="submit"class="login" name="login" value="Login" >
</form>




</body>

</html>







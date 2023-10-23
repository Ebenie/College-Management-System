

<?php


	
	$id="";
	$password="";

	$err="";
	
	$conn = mysqli_connect("localhost","root","","wcuecms");
	
	if(isset($_POST['login'])){
	 $id=mysqli_real_escape_string($conn,$_POST['id']);
	 $password=mysqli_real_escape_string($conn,$_POST['pass1']);
	 $sql="select * from admin where admin_id = '".$id." ' and admin_password ='".$password."' limit 1";
	 $result = mysqli_query($conn,$sql);
	 
	 if(empty($id)){
		 
		$err="Admin id is required!"; 
	 }
	 else if(empty($password)){
		 
    	$err="Admin password  is required!"; 
	 }
	 
	 else if(mysqli_num_rows($result) == 1){
		 header('location: adminDashboard.php');
		 
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
<link rel="stylesheet" href="adminLogin.css">
<script rel="javascript" src="validation.js"></script>
</head>



<body>

<center><form name="loginForm"  method="post" onsubmit="return validateForm();"><br><br>
<div class="login-type"></div>
            <div class="error" id="error">
                <?php echo $err; ?>
            </div>
<br><br>
<label>Admin ID:</label>
<input type="text" name="id"><br><br>


<label>Password:</label>
<input type="Password" name="pass1" placeholder="***********" required><br><br>
<input type="submit"class="login" name="login" value="Login" required >
</form>




</body>

</html>







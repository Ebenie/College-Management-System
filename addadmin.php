<?php 

$conn = mysqli_connect("localhost","root","","wcuecms");
$sql = " SELECT * FROM admin";
$result=mysqli_query($conn,$sql);
	
		

?>



<html>
<head>

<link rel="stylesheet" href="addstudents.css">

</head>



<body>

		<div class="a">
			
			<nav >
                <br>
				<ul>
					<center>
						<span>
					<img src="images/dashboard.png" class="nav-bar-img" >	
					<a href=""  class="d">Admin DashBoard</a>
						</span>
					</center>
					
					<li><a href="adminDashboard.php" >Home</a></li>
					<li><a href="anotification.php" >Notifications</a></li>
					<li><a href="addstudents.php" >Students</a></li>
					<li><a href="view_course_details.php" >Courses</a></li>
					<li><a href="addinstructors.php" >Instructors</a></li>
					<li><a href="view_departments.php" >Departments</a></li>
					<li><a href="adminLogin.php" >Logout</a></li>
				</ul>
			</nav>
			
	

     <div class="table">
	 <center><h1>Admin Panel</h1></center>
        <a href="adminRegistration.php">
            <button type="button" style="margin-right:-50px;margin-top:-20px;">Add Admin</button><br><br>
        </a><br>
<table >
    <tr>
		<th >Admin ID</th>
		<th >Admin Name</th>
		<th >Admin Email</th>
		<th>Actions</th>
    </tr>




  <?php
               
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr >
               
                <td ><?php echo $rows['admin_id'];?></td>
                <td ><?php echo $rows['admin_fname'];?></td>
                <td > <?php echo $rows['admin_email'];?></td>
                 <td >
                    <button type="button">View</button>
					<button type="button" >Update</button>
				     <button type="button" >Delete</button>
				 </td>
            </tr>
            <?php
                }
            ?>




</table>
            </div>
	</div>

</body>

</html>
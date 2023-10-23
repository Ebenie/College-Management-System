<?php 

$conn = mysqli_connect("localhost","root","","wcuecms");
$sql = " SELECT * FROM instructor";
$result=mysqli_query($conn,$sql);
		
		

?>



<html>
<head>

<link rel="stylesheet" href="addstudent.css">

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


<div>
<center><h1>Admin Panel</h1></center>
<a href="instructorRegistration.php">
            <button type="button" style="margin-right:-50px;margin-top:-20px;">Add Admin</button><br><br>
        </a><br>
<table>
    <tr >
		<th >Instructors ID</th>
		<th>First Name</th>
		<th >Middle Name</th>
		<th >Instructors Email</th>
		<th >Actions</th>
    </tr>




  <?php
               
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr style="width:100%">
               
                <td style="width:20%;height:30px;"><?php echo $rows['instruct_id'];?></td>
                <td style="width:20%;height:30px;"><?php echo $rows['instruct_fname'];?></td>
				<td style="width:20%;height:30px;"><?php echo $rows['instruct_mname'];?></td>
                <td style="width:20%;height:30px;"> <?php echo $rows['instruct_email'];?></td>
                 <td style="width:20%;height:30px;">
                    <button type="button" style="width:25%;height:30px;border:none;">View</button>
					<button type="button" style="width:25%;height:30px;border:none;">Update</button>
				     <button type="button" style="width:25%;height:30px;border:none;">Delete</button>
				 </td>
            </tr>
            <?php
                }
            ?>




</table>

<div>
</body>

</html>
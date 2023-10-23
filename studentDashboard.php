<?php
session_start();
$user="";
$id="";
$id = $_SESSION['id'];

$conn = mysqli_connect("localhost","root","","wcuecms");
$sqls="select * from student where stud_id = '".$id." ' limit 1";
$results = mysqli_query($conn,$sqls);

$students=mysqli_fetch_assoc($results);
$user= $students['stud_fname'];

?>


<html>	
	
    <head>
	<title>DashBoard</title>
	<link rel="Stylesheet" href="studentDashboard.css">
	</head>
	
	
	
	
	<body>
		<div class="a">
        <nav>
			<br><br>
				<ul>
					<center>
						<span>
					<img src="images/dashboard.png"class="nav-bar-img" >	
					<a href=""  class="d">DashBoard</a>
						</span>
					</center>
					
					<li><a href="studentDashboard.php" >Home</a></li>
					<li><a href="snotification.php" >Notifications</a></li>
					<li><a href="view_course.php" >Your Courses</a></li>
					<li><a href=" view_grades.php" >Your Grades</a></li>
					<li><a href="view_fees.php" >Your Fees</a></li>
					<li><a href="help.php" >Help</a></li>
					<li><a href="studentLogin.php" >Logout</a></li>
				</ul>
			</nav>
			
			
			
		<div>
		<h2 style="text-align:center;font-size:30px;">Welcome <?php echo $user; ?></h2>	
		<br><br>
				<span>
					
					<a href="snotification.php"  class="d">
					<img src="images/notifications.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px; margin-left:80px;margin-right:20px;">	
					
					</a>
				</span>
			
				<span>
						<a href="sschedule.php"  class="d">
					<img src="images/schedule.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px;margin-right:20px;">	
					</a>
				</span>
			
			
				<span>
							<a href="view_course.php"  class="d">
						<img src="images/courses.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px;margin-right:20px;">	
					</a>
				</span><br>
				
				
				
				<span>
						<a href="view_grades.php"  class="d">
					<img src="images/grade.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px; margin-left:80px;margin-right:20px;">
					</a>
				</span>
			
				<span>
						<a href="view_fees.php"  class="d">
						<img src="images/finance.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px;margin-right:20px;">
					</a>
				</span>
			
			
				<span>
						<a href="sdepartment.php"  class="d">
					<img src="images/departments.png" style="border:solid;border-width:1px;border-radius:20px;width:230px;height:200px;margin-right:20px;">
					</a>
				</span>
			
			
			
.		</div>	
			
			
			
			
		</div>


	</body>
</html>



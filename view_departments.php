
<?php



$conn = mysqli_connect("localhost","root","","wcuecms");
// Query to retrieve department information
$departmentSql = "SELECT * FROM department;";

// Execute the department query
$departmentResult = $conn->query($departmentSql);

// Display the department table
?>

<html>	
	
    <head>
	<title>DashBoard</title>
	<link rel="Stylesheet" href="addstudents.css">
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



<div style="margin-left:25%;">
   
    <h2 style="font-size:35px;">Welcome !</h2>

    <h3>All Your Courses Are Here</h3>
    
   

    <table>
        <tr>
           
        </tr>
        <?php
        // Loop through each grade record and display it in a table
        if ($departmentResult->num_rows > 0) {
            echo "<h2>Departments</h2>";
            echo "<table>";
            echo "<tr><th>Department</th><th>Department Head</th><th>Email</th></tr>";
        
            while ($departmentRow = $departmentResult->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $departmentRow['dept_name'] . "</td>";
                echo "<td>" . $departmentRow['headOfDept_name'] . "</td>";
                echo "<td>" . $departmentRow['head_email'] . "</td>";
                echo "</tr>";
            }
        
            echo "</table>";
        } else {
            echo "No departments found";
        }
        
        
        
        ?>
    </table>




    <br>
    
    </div>
    </div>

  

</body>
</html>



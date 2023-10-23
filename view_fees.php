<?php
session_start();
$students="";
$user="";








// Check if the user is authenticated (logged in)
if (!isset($_SESSION['id'])) {
    header("Location: ");
    exit();
}

// Assuming you have a database connection established
// Replace the below database credentials with your actual database information


$conn = mysqli_connect("localhost","root","","wcuecms");


	
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the grades for the authenticated student
$id = $_SESSION['id'];
//$sql = "SELECT * FROM result WHERE stud_id='$id'";

$sql = "SELECT feepayment.pay_type, feepayment.pay_data, feepayment.amount, feepayment.stud_id  
        FROM feepayment
        WHERE feepayment.stud_id = '$id'";


$result = $conn->query($sql);




$sqls="select * from student where stud_id = '".$id." ' limit 1";
$results = mysqli_query($conn,$sqls);

$students=mysqli_fetch_assoc($results);
$user= $students['stud_fname'];
?>

<html>	
	
    <head>
	<title>DashBoard</title>
	<link rel="Stylesheet" href="addstudents.css">
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

<div style="margin-left:25%;">
   
    <h2 style="font-size:35px;">Welcome <?php echo $user; ?>!</h2>

    <h3>All Your Payments Are Here</h3>
    <br><br>
    <table>
        <tr>
            <th>Payment Type</th>
            <th>Amount </th>
            <th>Date</th>
        </tr>
        <?php
        // Loop through each grade record and display it in a table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['pay_type']."</td>";
                echo "<td>".$row['amount']."</td>";
                echo "<td>".$row['pay_data']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No any payment yet!.</td></tr>";
        }
        ?>
    </table>
    <br>
    
    </div>


    </div>

</body>
</html>

<?php
$conn->close();
?>
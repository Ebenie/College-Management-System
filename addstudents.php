<?php
$conn = mysqli_connect("localhost", "root", "", "wcuecms");

// Add Student
if(isset($_POST['add_student'])) {
    $stud_id = $_POST['stud_id'];
    $stud_fname = $_POST['stud_fname'];
    $stud_mname = $_POST['stud_mname'];
    $stud_email = $_POST['stud_email'];

    $sql = "INSERT INTO student (stud_id, stud_fname, stud_mname, stud_email) VALUES ('$stud_id', '$stud_fname', '$stud_mname', '$stud_email')";
    mysqli_query($conn, $sql);
}

// Delete Student
if(isset($_POST['delete'])) {
    $stud_id = $_POST['stud_id'];
    $sql = "DELETE FROM student WHERE stud_id='$stud_id'";
    mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<html>
<head>
    <link rel="stylesheet" href="addstudent.css">
</head>
<body>
<div class="a">
    <nav>
        <br>
        <ul>
            <center>
                <span>
                    <img src="images/dashboard.png" class="nav-bar-img">
                    <a href="" class="d">Admin DashBoard</a>
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
        <body>
        <center><h1>Admin Panel</h1></center>
        <a href="studentRegistration.php">
            <button type="button">Add Students</button><br><br>
        </a>
        <table>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th> Middle Name</th>
                <th>Students Email</th>
                <th>Actions</th>
            </tr>

            <?php
            while ($rows = $result->fetch_assoc()) {
                ?>
                <tr >

                    <td><?php echo $rows['stud_id']; ?></td>
                    <td ><?php echo $rows['stud_fname']; ?></td>
                    <td><?php echo $rows['stud_mname']; ?></td>
                    <td > <?php echo $rows['stud_email']; ?></td>
                    <td >
                        <form method="POST" action="">
                            <input type="hidden" name="stud_id" value="<?php echo $rows['stud_id']; ?>">
                            <button type="submit" name="delete" style="border:none;">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>

    </div>
    </body>
</html>

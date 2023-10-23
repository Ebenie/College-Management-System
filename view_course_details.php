<?php
$email = "";
$conn = mysqli_connect("localhost", "root", "", "wcuecms");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve department and course information
$sql = "SELECT department.dept_name, department.headOfDept_name, GROUP_CONCAT(course.course_name SEPARATOR ', ') AS course_names
        FROM department
        LEFT JOIN course ON department.dept_id = course.dept_id
        GROUP BY department.dept_name;";

// Execute the query
$result = mysqli_query($conn, $sql);

// Query to retrieve all departments
$deptSql = "SELECT dept_name FROM department";

// Execute the department query
$deptResult = mysqli_query($conn, $deptSql);

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Delete department from the database
    if (isset($_POST['deleteDeptName'])) {
        $deleteDeptName = $_POST['deleteDeptName'];
        $deleteDeptSql = "DELETE FROM department WHERE dept_name = '$deleteDeptName'";
        mysqli_query($conn, $deleteDeptSql);
    }
    // Add new department to the database
    else {
        // Retrieve form data
        $newDeptName = $_POST['newDeptName'];
        $newHeadOfDeptName = $_POST['newHeadOfDeptName'];
        $email = $_POST['email'];

        // Insert new department into the database
        $insertDeptSql = "INSERT INTO department (dept_name, headOfDept_name, head_email) VALUES ('$newDeptName', '$newHeadOfDeptName', '$email')";
        mysqli_query($conn, $insertDeptSql);
        
        // Reset form fields
        $newDeptName = "";
        $newHeadOfDeptName = "";
        $email = "";
    }
}
?>

<html>
<head>
    <title>DashBoard</title>
    <link rel="stylesheet" href="addstudents.css">
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

                <li><a href="adminDashboard.php">Home</a></li>
                <li><a href="anotification.php">Notifications</a></li>
                <li><a href="addstudents.php">Students</a></li>
                <li><a href="view_course_details.php">Courses</a></li>
                <li><a href="addinstructors.php">Instructors</a></li>
                <li><a href="view_departments.php">Departments</a></li>
                <li><a href="adminLogin.php">Logout</a></li>
            </ul>
        </nav>
        <div style="margin-left: 25%;">
            <h2 style="font-size: 35px;">Welcome!</h2>
            <h3>All Departments with their Courses Are Here</h3>
            <br><br>

            <table>
                <tr>
                    <th>Department</th>
                    <th>Courses</th>
                    <th>Department Head</th>
                    <th>Actions</th>
                </tr>
                <?php
                // Loop through each department and its courses
                while ($deptRow = mysqli_fetch_assoc($deptResult)) {
                    $deptName = $deptRow['dept_name'];

                    // Find department head for the current department
                    $headOfDeptName = "";
                    mysqli_data_seek($result, 0); // Reset the result pointer
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dept_name'] == $deptName) {
                            $headOfDeptName = $row['headOfDept_name'];
                            break;
                        }
                    }

                    // Find courses for the current department
                    $courses = "";
                    mysqli_data_seek($result, 0); // Reset the result pointer
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['dept_name'] == $deptName) {
                            $courses = $row['course_names'];
                            break;
                        }
                    }

                    $coursesArray = explode(", ", $courses);
                    $numCourses = count($coursesArray);

                    echo "<tr>";
                    echo "<td rowspan='$numCourses'>" . $deptName . "</td>";
                    echo "<td>" . ($courses ? $coursesArray[0] : "No Course Yet!") . "</td>";
                    echo "<td rowspan='$numCourses'>" . ($headOfDeptName ? $headOfDeptName : "No department head") . "</td>";
                    echo "<td rowspan='$numCourses'>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='deleteDeptName' value='$deptName'>";
                    echo "<input type='submit' value='Delete'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";

                    for ($i = 1; $i < $numCourses; $i++) {
                        echo "<tr>";
                        echo "<td>" . $coursesArray[$i] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>

            <br>

            <!-- Form for adding new departments -->
            <h3>Add a New Department</h3>
            <form method="POST" action="">
                <label for="newDeptName">Department Name:</label>
                <input type="text" id="newDeptName" name="newDeptName" required value="<?php echo isset($newDeptName) ? $newDeptName : ''; ?>">
                <br><br>
                <label for="newHeadOfDeptName">Department Head:</label>
                <input type="text" id="newHeadOfDeptName" name="newHeadOfDeptName" required value="<?php echo isset($newHeadOfDeptName) ? $newHeadOfDeptName : ''; ?>">
                <br><br>
                <label for="email">Head Email:</label>
                <input type="email" id="email" name="email" required value="<?php echo isset($email) ? $email : ''; ?>"><br><br>
                <input type="submit" value="Add Department">
                <input type="reset" value="Reset">
            </form>
        </div>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>

<?php
session_start();

$id = "";
$id = $_SESSION['id'];
// Assuming you have a database connection established
$conn = mysqli_connect("localhost", "root", "", "wcuecms");
// Replace 'INSTRUCTOR_NAME_HERE' with the name of the specific instructor
$instructorName = "INSTRUCTOR_NAME_HERE";
// Retrieve student grades from the database
$sql = "SELECT student.stud_id, student.stud_fname, student.stud_lname, result.grade, instructor.instruct_fname
        FROM student
        JOIN result ON student.stud_id = result.stud_id
        JOIN instructor ON result.instruct_id = instructor.instruct_id
        WHERE instructor.instruct_id = '$id'";

// Execute the query and fetch the results
// Add your code here to execute the query with your database connection
// For example, if you are using MySQLi:
$resultSet = mysqli_query($conn, $sql);

// Create an empty array to store the results
$results = array();

// Check if the query was successful
if ($resultSet) {
    // Fetch each row from the result set
    while ($row = mysqli_fetch_assoc($resultSet)) {
        // Add the row to the results array
        $results[] = $row;
    }

    // Free the result set
    mysqli_free_result($resultSet);
} else {
    // Handle the error if the query fails
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>DashBoard</title>
    <link rel="Stylesheet" href="instructorDashboard.css">
</head>

<body>
    <div class="a">
        <nav>
            <br><br>
            <ul>
                <center>
                    <span>
                        <img src="images/dashboard.png" class="nav-bar-img">
                        <a href="" class="d">DashBoard</a>
                    </span>
                </center>

                <li><a href="studentDashboard.php">Home</a></li>
                <li><a href="snotification.php">Notifications</a></li>
                <li><a href="students_grades.php">Student Grades</a></li>
                <li><a href="sgrades.php">Your Grades</a></li>
                <li><a href="sfinance.php">Your Fees</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="instructorLogin.php">Logout</a></li>
            </ul>
        </nav>

        <div>
            <br><br><br><br>

            <!-- Display student grades in a table -->
            <form method="post" action="update_grades.php">
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade</th>
                        <th>Instructor Name</th>
                        <th>Update Grade</th>
                    </tr>
                    <?php foreach ($results as $result): ?>
                        <tr>
                            <td><?php echo $result['stud_id']; ?></td>
                            <td><?php echo $result['stud_fname']; ?></td>
                            <td><?php echo $result['stud_lname']; ?></td>
                            <td><?php echo $result['grade']; ?></td>
                            <td><?php echo $result['instruct_fname']; ?></td>
                            <td>
                                <input type="hidden" name="stud_id[]" value="<?php echo $result['stud_id']; ?>">
                                <input type="text" name="grade[]" value="<?php echo $result['grade']; ?>">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <button type="submit">Update Grades</button>
            </form>

        </div>
    </div>
</body>
</html>

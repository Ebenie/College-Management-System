<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "wcuecms");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$studIds = $_POST['stud_id'];
$grades = $_POST['grade'];

// Loop through each student ID and corresponding grade
for ($i = 0; $i < count($studIds); $i++) {
    $studId = $studIds[$i];
    $grade = $grades[$i];

    // Update the grade in the 'result' table
    $sql = "UPDATE result SET grade = '$grade' WHERE stud_id = '$studId'";
    $result = mysqli_query($conn, $sql);

    // Handle the update result
    if (!$result) {
        echo "Error updating grade for student ID $studId: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);

// Redirect back to the page displaying the grades
header("Location: students_grades.php");
exit();
?>

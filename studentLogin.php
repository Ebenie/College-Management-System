<?php
session_start();
$user = "";
$id = "";
$password = "";
$err = "";

$conn = mysqli_connect("localhost", "root", "", "wcuecms");

if (isset($_POST['login'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $password = mysqli_real_escape_string($conn, $_POST['pass1']);
    $sql = "SELECT * FROM student WHERE stud_id = '" . $id . "' AND password='" . $password . "' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (empty($id)) {
        $err = "User ID is required!";
    } else if (empty($password)) {
        $err = "Password is required!";
    } else if (mysqli_num_rows($result) == 1) {
        $_SESSION['id'] = $id;
        header("Location: studentDashboard.php");
        exit;
    } else {
        $err = "Your ID and Password do not match!";
    }
}
?>

<html>
<head>
    <link rel="stylesheet" href="adminLogin.css">
    <script rel="javascript" src="validation.js"></script>
</head>

<body>
    <center>
        <form name="loginForm" method="post" onsubmit="return validateForm();"><br><br>
            <div class="login-type"></div>
            <div class="error" id="error">
                <?php echo $err; ?>
            </div>
            <br><br>
            <label>Student ID:</label>
            <input type="text" name="id" required><br><br>

            <label>Password:</label>
            <input type="password" name="pass1" placeholder="***********" required><div id="error"></div><br><br>

            <input type="submit" class="login" name="login" value="Login">
        </form>
    </center>
</body>
</html>

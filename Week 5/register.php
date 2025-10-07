<?php
include("db_connect.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // for consistency with login.php (use password_hash() in real projects)

    // Check if the username already exists
    $check_user = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($link, $check_user);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists!";
    } else {
        // Insert new user into the database
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $query)) {
            echo "Registration successful! You can now login.";
        } else {
            echo "Error during registration: " . mysqli_error($link);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="username" required><br>

        <label for="">Password</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="register" value="Register">
    </form>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>

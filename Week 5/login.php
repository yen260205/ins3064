<?php
include("db_connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        echo("Login successful!");
    } else {
        echo "Wrong information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="">User name</label>
        <input type="text" name="username" required><br>
        <label for="">Password</label>
        <input type="password" name="password" required>
        <input type="submit" name="login" value="Login">
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>

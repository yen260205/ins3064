<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

//Take user infor from DB
$con=mysqli_connect('localhost','root', '', 'loginReg', 3307);
mysqli_select_db($con,'LoginReg');
$username = $_SESSION['username'];
$query = "select * from userReg where name='$username'";
$result = mysqli_query($con,$query);
$user_data = mysqli_fetch_assoc($result);
?>

<html lang='en'>
<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <a class="float-right" href="logout.php">LOGOUT</a>
    <h1>Welcome <? echo $_SESSION['username']; ?> </h1>
    <div class="user-info" style="color: white; margin-top: 50px;">
        <h3>Your Information:</h3>
        <p><strong>Student ID:</strong> <?php echo $user_data['StudentID']; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $user_data['Date_of_Birth']; ?></p>
        <p><strong>Country:</strong> <?php echo $user_data['Country']; ?></p>
    </div>
</div>
</body>
</html>
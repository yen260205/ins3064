<?php
include "connection.php";
$id=$_GET["id"];

$name="";
$brand="";
$processor="";
$ram="";
$storage="";
$screen_size="";
$price="";
$stock="";

$res=mysqli_query($link,"select * from table1 where id=$id");
while ($row=mysqli_fetch_array($res))
{
    $name=$row["name"];
    $brand=$row["brand"];
    $processor=$row["processor"];
    $ram=$row["ram"];
    $storage=$row["storage"];
    $screen_size=$row["screen_size"];
    $price=$row["price"];
    $stock=$row["stock"];
}
?>

<html lang="en" xmlns="">
<head>
    <title>Laptop Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-4">
        <h2>Edit Laptop Data</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="name">Laptop Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter laptop name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand" value="<?php echo $brand; ?>">
            </div>
            <div class="form-group">
                <label for="processor">Processor:</label>
                <input type="text" class="form-control" id="processor" placeholder="Enter processor" name="processor" value="<?php echo $processor; ?>">
            </div>
            <div class="form-group">
                <label for="ram">RAM:</label>
                <input type="text" class="form-control" id="ram" placeholder="Enter RAM" name="ram" value="<?php echo $ram; ?>">
            </div>
            <div class="form-group">
                <label for="storage">Storage:</label>
                <input type="text" class="form-control" id="storage" placeholder="Enter storage" name="storage" value="<?php echo $storage; ?>">
            </div>
            <div class="form-group">
                <label for="screen_size">Screen Size:</label>
                <input type="text" class="form-control" id="screen_size" placeholder="Enter screen size" name="screen_size" value="<?php echo $screen_size; ?>">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="<?php echo $price; ?>">
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="text" class="form-control" id="stock" placeholder="Enter stock quantity" name="stock" value="<?php echo $stock; ?>">
            </div>
            <button type="submit" name="update" class="btn btn-default">Update</button>
        </form>
    </div>
</div>
</body>

<?php
if(isset($_POST["update"]))
{
    mysqli_query($link,"update table1 set 
        name='$_POST[name]',
        brand='$_POST[brand]',
        processor='$_POST[processor]',
        ram='$_POST[ram]',
        storage='$_POST[storage]',
        screen_size='$_POST[screen_size]',
        price='$_POST[price]',
        stock='$_POST[stock]'
        where id=$id");

    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>

</html>

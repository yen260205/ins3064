<?php
include "connection.php";
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
    <h2>Laptop Data Form</h2>
    <form action="" name="form1" method="post">
        <div class="form-group">
            <label for="name">Laptop Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter laptop name" name="name">
        </div>
        <div class="form-group">
            <label for="brand">Brand:</label>
            <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
        </div>
        <div class="form-group">
            <label for="processor">Processor:</label>
            <input type="text" class="form-control" id="processor" placeholder="Enter processor" name="processor">
        </div>
        <div class="form-group">
            <label for="ram">RAM:</label>
            <input type="text" class="form-control" id="ram" placeholder="Enter RAM" name="ram">
        </div>
        <div class="form-group">
            <label for="storage">Storage:</label>
            <input type="text" class="form-control" id="storage" placeholder="Enter storage" name="storage">
        </div>
        <div class="form-group">
            <label for="screen_size">Screen Size:</label>
            <input type="text" class="form-control" id="screen_size" placeholder="Enter screen size" name="screen_size">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" class="form-control" id="stock" placeholder="Enter stock quantity" name="stock">
        </div>
        <button type="submit" name="insert" class="btn btn-default">Insert</button>
        <button type="submit" name="update" class="btn btn-default">Update</button>
        <button type="submit" name="delete" class="btn btn-default">Delete</button>
    </form>
</div>
</div>

<div class="col-lg-12">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Screen Size</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($link)) {
            $res=mysqli_query($link,"select * from table1");
        }
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>"; echo $row["id"]; echo "</td>";
            echo "<td>"; echo $row["name"]; echo "</td>";
            echo "<td>"; echo $row["brand"]; echo "</td>";
            echo "<td>"; echo $row["processor"]; echo "</td>";
            echo "<td>"; echo $row["ram"]; echo "</td>";
            echo "<td>"; echo $row["storage"]; echo "</td>";
            echo "<td>"; echo $row["screen_size"]; echo "</td>";
            echo "<td>";
            if (isset($row["price"]) && $row["price"] !== null) {
                echo number_format((float)$row["price"], 2);
            } else {
                echo "0.00"; // hoặc để trống: echo "";
            }
            echo "</td>";
            echo "<td>"; echo $row["stock"]; echo "</td>";
            echo "<td>"; ?> <a href="edit.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit </button></a> <?php echo "</td>";
            echo "<td>"; ?> <a href="delete.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Delete </button></a> <?php echo "</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<?php
if(isset($_POST["insert"]))
{
    mysqli_query($link,"insert into table1 values (NULL,'$_POST[name]' ,'$_POST[brand]','$_POST[processor]','$_POST[ram]','$_POST[storage]','$_POST[screen_size]','$_POST[price]','$_POST[stock]')");
   ?>
    <script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}

if(isset($_POST["delete"]))
{
    mysqli_query($link,"delete from table1 where name='$_POST[name]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

if(isset($_POST["update"]))
{
    mysqli_query($link,"update table1 set brand='$_POST[brand]' where name='$_POST[name]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}
?>
</html>

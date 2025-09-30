<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // http://ins3064.test/?x=5
        // http://ins3064.test/?y=7
        $x = $_GET["x"];
        $y = $_GET["y"];
        echo "x == y: ".($x==$y)."<br/>";
        echo "x != y: ".($x!=$y)."<br/>";
        echo "x < y: ".($x<$y)."<br/>";
        echo "x > y: ".($x>$y)."<br/>";
        echo "x <= y: ".($x<=$y)."<br/>";
        echo "x >= y: ".($x>=$y)."<br/>";
        ?>
    </body>
</html>
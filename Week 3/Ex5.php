<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
        <?php
            for ($i = 0; $i < 5; $i++) {
                echo "
                <tr>
                    <td>$i</td>
                </tr>
                ";
            }
        ?>
    </body>
</html>
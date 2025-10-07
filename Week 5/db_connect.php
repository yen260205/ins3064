<?php
    $link = mysqli_connect("localhost", "root", "", 'loginReg', 3307) or die(mysqli_connect_error());

    mysqli_select_db($link, "login_demo") or die(mysqli_error($link));
?>
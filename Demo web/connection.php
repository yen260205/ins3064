<?php
//creating a database connection - $link is a variable use for just connection class
$link=mysqli_connect("localhost","root", '', 'loginReg', 3307) or die(mysqli_error($link));
mysqli_select_db($link,"LoginReg") or die(mysqli_error($link));

//fr7r9
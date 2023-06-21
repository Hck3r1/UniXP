<?php
$conn = new mysqli("localhost", "unixpng_unixp", "UniXP123##", "unixpng_unixp");
if (mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
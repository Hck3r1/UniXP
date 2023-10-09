<?php
$conn = new mysqli("localhost", "", "", "");
if (mysqli_connect_errno()){
    printf("connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
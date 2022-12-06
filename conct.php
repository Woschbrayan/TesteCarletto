<?php

$conn = mysqli_connect('localhost:3306', 'root', '');
$dbname = mysqli_select_db($conn, 'testecarletto');
mysqli_set_charset($conn, 'utf8');


?>
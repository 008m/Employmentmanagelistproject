<?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "task0";

$conn = mysqli_connect($Servername,$username,$password,$dbname);

if($conn)
{
   // echo "connection ok"
}
else
{
    echo "connection failed" .mysqli_connect_error();
}

?>
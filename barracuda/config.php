<?php

$server = "localhost";
$username = "Odallo";
$password = "Load";
$database = "barracudahotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>
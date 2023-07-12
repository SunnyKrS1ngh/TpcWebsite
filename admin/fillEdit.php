<?php
 session_start();
         $mail = $_SESSION['email'];
         $servername = "localhost";
$username = "root";
$password = "";
$database = "psystem";

$conn = mysqli_connect($servername, $username, $password,$database);

$sql = "select *from sdetails where email = '$mail'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

if($num==1){
    header("location: editError.php");
}else{
    header("location: details.php");
}
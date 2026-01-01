<?php 
if (!isset($_POST['submit'])) {
 header("location:login.php");
 exit;
}
$email = $_POST['email'];
$password = $_POST['password'];
if ($password == "yassir123" && $email == "yassir@gmail.com") {
    header('location:admin.php');   
}
?>

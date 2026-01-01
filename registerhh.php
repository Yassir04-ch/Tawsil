<?php 
if (!isset($_POST['submit'])) {
 header("location:login.php");
 exit;
}
$fmane = $_POST['firstname'];
$lmane = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$user = [$fmane,$lmane,$email,$password,$role];
var_dump($user);

?>

<?php
$username   = $_POST['username'];
$pass	 	= $_POST['password'];

include 'koneksi.php';

$user = mysqli_query($koneksi,"select * from user where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
	session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
	
	header("location:welcome.php");
}else
{
    header("location:index.html");
}
?> 




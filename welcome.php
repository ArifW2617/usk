<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<?php
session_start();
?>

<br>
<b>Selamat Datang </b>

<?php 
//echo $_SESSION['nama_lengkap';'user_id']
echo $_SESSION['username'];
?>

 <a href="form.html" button type="submit" name="form" class="btn btn-primary">Isi Data </button>
 <a href="logout.php" button type="submit" name="logout" class="btn btn-primary">logout </button>

<br>
</body>
</html>
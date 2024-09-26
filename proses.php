<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
include "koneksi.php";

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$tingkatan=$_POST['tingkatan'];

$query = mysqli_query($koneksi, "insert into datasiswa values ('$nisn','$nama','$jurusan','$tingkatan')");

if($query){
//echo "Berhasil input data ke database ";
?>
<br>
<a href="tabel.php"><button type="submit" name="submit" class="btn-primary"><font color=white>Data Siswa</font></a></button>

<?php
}else{
echo "Gagal input data";
echo mysqli_error();
}
?>
</html>
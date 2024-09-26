<?php
include "koneksi.php";
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$tingkatan=$_POST['tingkatan'];
$query=mysqli_query($koneksi, "update datasiswa set nama='$nama', jurusan='$jurusan', tingkatan='$tingkatan' where nisn='$nisn'");
if($query){
//echo "Berhasil update data ke database ";
?>
<br>
<br>
<a href="tabel.php">Lihat data di Tabel</a><?php
}else{
echo "Gagal update data";
echo mysql_error();
}
?>

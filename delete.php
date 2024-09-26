<?php

include "koneksi.php";

$nisn=$_GET['nisn'];

//$query=mysql_query("delete from datasiswa where nisn='$nisn'");
$query = mysqli_query($koneksi,"delete from datasiswa where nisn='$nisn'");

if($query){
?><script language="javascript">document.location.href="tabel.php";</script><?php
}else{
echo "gagal hapus data";
}
?>


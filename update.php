<?php
include "koneksi.php";

$nisn=$_GET['nisn'];

$query=mysqli_query($koneksi, "select * from datasiswa where nisn='$nisn'");
while ($d = mysqli_fetch_array($query)){
	?>
<form action="simpan.php" method="post">
<table border="1">
<tr>
<td>NISN</td><td><input type="text" name="nisn" value="<?php echo $d['nisn'];?>" readonly></td>
</tr>
<tr>
<td>Nama</td><td><input type="text" name="nama" value="<?php echo $d['nama'];?>" /></td>
</tr>

<tr><td>Jurusan</td><td><input type="text" name="jurusan" value="<?php echo $d['jurusan'];?>" /></td>
</tr>
<tr>
<td>Tingkatan</td><td><input type="integer" name="tingkatan" value="<?php echo $d['tingkatan'];?>" /></td>
</tr>


<tr><td><input type="submit" value="Simpan" name="simpan" /></td>
</tr>

<?php
}
?>
</table>
</form>

<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body> 
<?php
include "koneksi.php";
//$query = mysqli_query($koneksi,"select * from datasiswa values ('$nisn','$nama','$jurusan','$tingkatan')");
$query = mysqli_query($koneksi,"select * from datasiswa");
$jumlah=mysqli_num_rows($query);
echo "Jumlah Data Siswa Adalah : ".$jumlah;
?>
</br>
</br>
<table border="1">
<tr>
<th>NISN      </th>
<th>Nama      </th>
<th>Jurusan   </th>
<th>Tingkat   </th>
<th>Aksi      </th>
</tr>

<?php
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['nisn'];?></td>
<td><?php echo $row['nama'];?></td>
<td><?php echo $row['jurusan'];?></td>
<td><?php echo $row['tingkatan'];?></td>

<td><a href="delete.php?nisn=<?php echo $row['nisn']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>

<a href="update.php?nisn=<?php echo $row['nisn']; ?>">Update</a>
</td>

<?php
}
?>
</table><br />

<a href="form.html"><button type="submit" name="submit" class="btn-primary"><font color=white>Halaman Utama</font></a></button>
</body>
</html>




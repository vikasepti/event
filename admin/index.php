<?php include('koneksi.php');
session_start();?>
<html>
<head><title>Data Pendaftaran</title></head>
<center><h2>Data Pendaftaran</h2></center>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<header><h2><daftar peserta></h2></header>
	<center><nav><a href="v_from.php"><button>tambah baru</button>
	</a></nav></center>
	<br>
	<table border="1" cellpadding="8" align="center" bgcolor="white">
	<thread>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Tindakan</th>
		</tr>
	</thread>
<?php
$sql = "SELECT * FROM admin";
$query = mysqli_query($koneksi, $sql);
while ($admin = mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$admin['Id']."</td>";
	echo "<td>".$admin['nama']."</td>";
	echo "<td>".$admin['email']."</td>";
	echo "<td>".$admin['tgl_lahir']."</td>";
	echo "<td>".$admin['alamat']."</td>";
	echo "<td>";
	echo "<a href = 'edit.php?Id=".$admin['Id']."'>Edit</a> | ";
	echo "<a href = 'hapus.php?Id=".$admin['Id']."'>Hapus</a> | ";
}
?>
</body>
</table>
<p>total:
	<?php echo mysqli_num_rows($query)?>
<br>
<center><nav><a href="logout.php"><button>logout</button></a></nav>
</center>
</p>
</html>
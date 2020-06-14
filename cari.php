<?php
include"koneksi.php";

$cari = $_GET['q'];
$query ="select * from siswa where nama like '%$cari%'";
$reseult = mysqli_query($con,$query); 
?>

<table border="1px">
		<h1>Tabel siswa</h1>
		<tr>
			<th>id</th>
			<th>nama</th>
			<th>tanggallahir</th>
	
		
		</tr>
		<?php
		while ($row = mysqli_fetch_array($reseult)) {
		?>
	<tr>
		<th><?php echo $row['id'] ?></th>
		<th><?php echo $row['nama'] ?></th>
		<th><?php echo $row['tanggallahir'] ?></th>

	</tr>

	<?php 
}
	?>

<?php

while ($row = mysqli_fetch_array($reseult)) {
	echo $row['nama'];
	echo '<br />';
}
mysqli_close($con);

?>
<?php

include('connection.php');
$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<body>
	<a href="add.php">Tambah Data</a>

	<br/><br/>

	<form action="search.php" method="get">
		<input type="text" name="keyword" placeholder="keyword">
		<button type="submit">Search</button>
	</form>

	<br/><br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Jenis Kelamin</th>
			<th>Pilihan</th>

			<?php foreach ($results as $results) : ?>

				<tr>
					<td><?php echo $results['nama']; ?></td>
					<td><?php echo $results['alamat']; ?></td>
					<td><?php echo $results['umur']; ?></td>
					<td><?php echo $results['jk']; ?></td>
					<td>
						<a href="edit.php? id= <?php echo $results['id']?>">Edit</a>
						<a href="hapus.php? id= <?php echo $results['id']?>">Hapus</a>
					</td>
				</tr>

			<?php endforeach; ?>

		</tr>
	</table>
</body>
</html>
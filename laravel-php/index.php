<?php

$siswa = [
	['nama' => 'avita', 'kelas' => 'A', 'goldar' => 'AB'],
	['nama' => 'dinny', 'kelas' => 'B', 'goldar' => 'O'],
	['nama' => 'fitri', 'kelas' => 'C', 'goldar' => 'O'],
	['nama' => 'triksi', 'kelas' => 'D', 'goldar' => 'A'],
	['nama' => 'lutfi', 'kelas' => 'E', 'goldar' => 'B'],
];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php</title>
</head>
<body>
	<table border="1">
		<tr>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Golongan Darah</th>
	</tr>

	<?php foreach ($siswa as $key => $value) : ?>
		<tr>
		<td><?php echo $value ['nama']; ?></td>
		<td><?php echo $value ['kelas']; ?></td>
		<td><?php echo $value ['goldar'];?></td>
		</tr>
	<?php endforeach; ?>

			
	</table>
	
</body>
</html>
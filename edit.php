<?php

include 'connection.php';

$id = $_GET['id'];

$query = mysqli_query($connect, "SELECT * FROM karyawan WHERE id= '$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);


?>

<html>
	<form action="update.php" method="post">

		<input type="hidden" name="id" value="<?php echo $result[0]['id'] ?>">
		<label for="nama">Nama</label><br>
		<input type="text" name="nama" value="<?php echo $result[0]['nama']?>">
		<br/><br/>
		<label for="alamat">Alamat</label><br>
		<textarea name="alamat" cols="30" rows="10" ><?php echo $result[0]['alamat']?></textarea>
		<br/><br/>
		<label for="umur">Umur</label><br>
		<input type="text" name="umur" value="<?php echo $result[0]['umur']?>">
		<br/><br/>
		<label for="jk">Jenis Kelamin</label><br>
		<select name="jk" id="" >
			<option value="Pria" <?php echo($result[0]['jk'] == 'Pria') ? 'selected' : ' ';?> >Pria</option>
			<option value="Wanita" <?php echo($result[0]['jk'] == 'Wanita') ? 'selected' : ' ';?> >Wanita</option>
		</select>
		<br/><br/>
		<button type="submit">Update</button>
	</form>
</html>
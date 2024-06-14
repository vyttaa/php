<html>
	<form action="insert.php" method="post">
		<label for="nama">Nama</label><br>
		<input type="text" name="nama">
		<br/><br/>
		<label for="alamat">Alamat</label><br>
		<textarea name="alamat" cols="30" rows="10"></textarea>
		<br/><br/>
		<label for="umur">Umur</label><br>
		<input type="text" name="umur">
		<br/><br/>
		<label for="jk">Jenis Kelamin</label><br>
		<select name="jk" id="">
			<option>Pria</option>
			<option>Wanita</option>
		</select>
		<br/><br/>
		<button type="submit">Tambah</button>
	</form>
</html>
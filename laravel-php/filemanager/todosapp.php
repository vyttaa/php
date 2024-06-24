<?php 

$todos = [];
$file = file_get_contents('todo.txt');
$todos = unserialize($file);

if (isset($_POST['todo'])) {
	$data = $_POST['todo'];
	$todos[] = [
		'todo' => $data,
		'status' => 0,
	];
	SaveData($todos);
}
if (isset($_GET['status'])) {
	$todos[$_GET['key']]['status'] = $_GET['status'];
	SaveData($todos);
}

if (isset($_GET['hapus'])) {
	unset($todos[$_GET['key']]);
	SaveData($todos);
}

function SaveData($todos)
{
	file_put_contents('todo.txt', serialize($todos));
	header('Location:todosapp.php');
}

print_r($todos);

?>

<h1>Todos APP</h1>

<form method="POST">
	<label>Apa kegiatanmu hari ini?</label>
	<input type="text" name="todo">
	<button type="submit">Simpan</button> <br>
</form>

<ul>
	<?php foreach ($todos as $key => $value) : ?>
		<li>
		<input type="checkbox" name="todo" onclick="window.location.href = 'todosapp.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?> 1&key=<?php echo $key; ?>'"
		<?php if ($value['status'] == 1) echo 'checked'; ?>>
		<label>
			<?php 
			if ($value['status'] == 1)
			echo '<del>'.$value['todo'].'</del>';
			else 
				echo $value['todo'];
			 ?>

		</label>
		<a href="todosapp.php?hapus=1&key=<?php echo $key; ?>" onclick = "return confirm('Apa kamu yakin akan menghapus todo ini?')" >hapus</a>
	</li>
<?php endforeach; ?>
	
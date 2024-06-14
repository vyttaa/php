<?php 
include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];

$update = mysqli_query($connect, "UPDATE karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jk='$jk' WHERE id='$id'");

if ($update)
    header('Location: list.php');
else 
    echo 'Update Data Gagal';

?>
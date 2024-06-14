<?php

include 'connection.php';

$id = $_GET['id'];

$hapus = mysqli_query($connect, "DELETE FROM karyawan WHERE id= '$id'");

if ($hapus)
    header('Location: list.php');
else 
    echo 'Hapus Data Gagal';

?>
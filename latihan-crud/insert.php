<?php

include('connection.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];

$insert = mysqli_query($connect, "INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jk='$jk'");

if ($insert)
    header('Location: list.php');
else 
    echo 'Input Data Gagal';
<?php

$connect = mysqli_connect('localhost', 'root', '', 'bootcamp');

if (!$connect)
	exit('Gagal Koneksi Database');
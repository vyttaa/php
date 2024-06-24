<?php

$pesan = "Apa Kabar\n";

file_put_contents("content.txt", $pesan, FILE_APPEND);

$isi_file = file_get_contents("content.txt");
echo $isi_file;
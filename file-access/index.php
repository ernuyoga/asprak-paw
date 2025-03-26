<?php
// 7. Membuka file untuk dibaca dan ditulis
$file = fopen("contoh.txt", "r+") or die("File tidak dapat dibuka!");

// Membaca isi file
$content = fread($file, filesize("contoh.txt"));
echo "Isi file sebelum ditulis: <br>" . $content . "<br>";

// Menulis ke file (mengubah konten)
fseek($file, 0);  // Mengatur pointer file ke posisi awal
fwrite($file, "Menulis data baru di awal file.\n");

// Menutup file setelah selesai
fclose($file);

// Membuka kembali file untuk membaca hasil setelah ditulis
$file = fopen("contoh.txt", "r") or die("File tidak dapat dibuka!");
$new_content = fread($file, filesize("contoh.txt"));
echo "Isi file setelah ditulis: <br>" . $new_content;

fclose($file);
?>
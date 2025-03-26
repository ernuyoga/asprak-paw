<?php
// 1. Membuka file untuk dibaca
$file = fopen("contoh.txt", "r") or die("File tidak dapat dibuka!");

// Membaca isi file
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

// Menutup file setelah selesai
fclose($file);
?>

<?php
// 2. Membuka file untuk menulis
$file = fopen("contoh.txt", "w") or die("File tidak dapat dibuka!");

// Menulis ke file
fwrite($file, "Ini adalah contoh penulisan ke file.\n");
fwrite($file, "PHP memudahkan pengelolaan file.");

// Menutup file setelah selesai
fclose($file);

// Membuka file untuk dibaca
$file = fopen("contoh.txt", "r") or die("File tidak dapat dibuka!");

// Membaca isi file
while (!feof($file)) {
    echo fgets($file) . "<br>";
}

// Menutup file setelah selesai
fclose($file);
?>

<?php
// 3. Membaca seluruh isi file ke dalam sebuah string
$fileContent = file_get_contents("contoh.txt");

// Menampilkan isi file
echo $fileContent;
?>

<?php
// 4. Menulis data ke file
file_put_contents("contoh.txt", "Penulisan data menggunakan file_put_contents()");

// Membaca dan menampilkan isi file
echo file_get_contents("contoh.txt");
?>

<?php
// 5. Membuka file untuk dibaca
$file = fopen("contoh.txt", "r") or die("File tidak dapat dibuka!");

// Membaca isi file
$content = fread($file, filesize("contoh.txt"));
echo $content;

// Menutup file setelah selesai
fclose($file);
?>

<?php
// 6. Membuka file untuk ditambahkan data (append)
$file = fopen("contoh.txt", "a") or die("File tidak dapat dibuka!");

// Menulis data baru ke dalam file
fwrite($file, "Menambah data di akhir file.\n");

// Membaca dan menampilkan isi file
echo file_get_contents("contoh.txt");

// Menutup file setelah selesai
fclose($file);
?>

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
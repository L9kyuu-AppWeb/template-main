<?php
session_start();

// Membuat teks acak untuk CAPTCHA
$captcha_text = '';
for ($i = 0; $i < 6; $i++) {
    $captcha_text .= chr(rand(65, 90));
}

// Menyimpan teks CAPTCHA dalam sesi
$_SESSION['kodecap'] = $captcha_text;

// Membuat gambar CAPTCHA
$width = 150;
$height = 50;
$image = imagecreate($width, $height);

// Menetapkan warna
$background_color = imagecolorallocate($image, 255, 255, 255); // Putih
$text_color = imagecolorallocate($image, 0, 0, 0); // Hitam
$line_color = imagecolorallocate($image, 64, 64, 64); // Abu-abu gelap

// Mengisi latar belakang
imagefilledrectangle($image, 0, 0, $width, $height, $background_color);

// Menambahkan beberapa gangguan ringan (garis acak)
for ($i = 0; $i < 3; $i++) {
    imageline($image, 0, rand(0, $height), $width, rand(0, $height), $line_color);
}

// Menambahkan teks ke gambar
$font_size = 5; // Ukuran font
$font_width = imagefontwidth($font_size);
$font_height = imagefontheight($font_size);
$text_width = $font_width * strlen($captcha_text);
$x = ($width - $text_width) / 2;
$y = ($height - $font_height) / 2;
imagestring($image, $font_size, $x, $y, $captcha_text, $text_color);

// Menampilkan gambar
header('Content-type: image/png');
imagepng($image);

// Membersihkan memori
imagedestroy($image);
?>

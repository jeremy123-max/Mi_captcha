<?php
session_start();

if (!isset($_SESSION['captcha_attempts'])) {
    $_SESSION['captcha_attempts'] = 0;
}

// Crear CAPTCHA
header('Content-type: image/png');

$image = imagecreatetruecolor(150, 50);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$line_color = imagecolorallocate($image, 64, 64, 64);
$pixel_color = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 150, 50, $background_color);

// Líneas de interferencia
for ($i = 0; $i < 8; $i++) {
    imageline($image, rand(0, 150), rand(0, 50), rand(0, 150), rand(0, 50), $line_color);
}

// Puntos de interferencia
for ($i = 0; $i < 1000; $i++) {
    imagesetpixel($image, rand(0, 150), rand(0, 50), $pixel_color);
}

// Texto del CAPTCHA
$captcha_code = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789'), 0, 6);
$_SESSION['captcha'] = $captcha_code;

// Texto sin fuente TTF
imagestring($image, 5, 45, 15, $captcha_code, $text_color);

// Mostrar la imagen del CAPTCHA
imagepng($image);
imagedestroy($image);
?><img src="captcha.php" alt="CAPTCHA">
<p>¿Problemas con el CAPTCHA? <a href="tel:+51903367320">Llamar para asistencia</a></p>
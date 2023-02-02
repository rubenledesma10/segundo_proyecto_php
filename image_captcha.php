<?php
session_start();
header("Content-type: image/jpeg");
$img_captcha=imagecreate(120, 40);
$color_fondo = imagecolorallocate($img_captcha, 179, 217, 255);
$color_text=imagecolorallocate($img_captcha, 61, 0, 153);
imagestring($img_captcha, 5, 20, 10, $_SESSION['captcha'], $color_text);
imagejpeg($img_captcha);
?>
<?php
$image = "imagenes/lenguajes_programacion.jpeg";
$marca_agua = "imagenes/marca.png";
$img = imagecreatefrompng($marca_agua);
$ext = substr($image, -4);
$ext = strtolower($ext);
switch ($ext) {
	case 'gif':
		$img2=imagecreatefromgif($image);
		break;
	
    case 'jpeg':
        $img2=imagecreatefromjpeg($image);
        break;
    case 'png':
    	$img2=imagecreatefrompng($image);
    	break;
}
imagecopy($img2, $img, (imagesx($img2)/2.5), (imagesy($img2)/2.5), (imagesx($img)/500), (imagesy($img)/500), imagesx($img), imagesy($img));
header("Contenttype: imagnes/jpeg.");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>
<?php
session_start();
header("Content-type: image/jpeg");

$imagen = imagecreate(100,40);
imagecolorallocate($imagen,0,0,0);
$color_txt = imagecolorallocate($imagen,255,255,255);
imagestring($imagen,5,20,10,$_SESSION['captcha'],$color_txt);
imagejpeg($imagen);
imagedestroy($imagen);


session_destroy();
?>
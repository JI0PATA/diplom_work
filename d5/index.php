<?php

header('Content-Type: image/png');
//imagecreatetruecolor(100, 100);
$file = 'zsTeVa.jpg';
$im = imagecreatefromjpeg($file);
$wm = imagecreatefrompng('watermark-512.png');

$mr = 40;
$mb = 40;

imagecopyresized($im, $wm, imagesx($im) - 200 - $mr, imagesy($im) - 200 - $mb, 0, 0, 200, 200, imagesx($wm), imagesy($wm));
imagepng($im);
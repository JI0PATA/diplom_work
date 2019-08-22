<?php

$image = imagecreatefrompng('image.png');

$width = imagesx($image);
$height = imagesy($image);

for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        $color = imagecolorat($image, $x, $y);

        $red = ($color >> 16) & 0xFF;
        $green = ($color >> 8) & 0xFF;
        $blue = $color & 0xFF;

        $colors[$color]['rgb'] = $red .', ' . $green . ',' . $blue;
        @$colors[$color]['index']++;
    }
}

usort($colors, function($a, $b) {
    return $b['index'] <=> $a['index'];
});

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php for ($i = 0; $i < 3; $i++) : ?>
<div style="width: 100px; height: 100px; background: rgba(<?=$colors[$i]['rgb']?>); display: inline-block; border: 1px solid #000;"></div>
<?php endfor; ?>

</body>
</html>

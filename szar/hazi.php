<?php
header('content-type:image/png');
$img = imagecreatefrompng ('asd.png') ;
$pink = imagecolorallocate($img, 255,192,203);
$feher = imagecolorallocatealpha($img, 255, 255, 255, 50);
$adatok = getimagesize('asd.png');
$w = $adatok[0];
$h = $adatok[1];

for($y = 0; $y < $h; $y++){
        for($x = 0; $x < $w; $x++){
            $rgb = imagecolorat($img, $x, $y);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;
            if($b > 200 && $g > 200 && $r > 200){
                imagesetpixel($img, $x, $y, imagecolorallocate($img, 139,69,19));
            }
            else{
                imagesetpixel($img, $x, $y, imagecolorallocate($img, 255,192,203));
            }
        }
}



imagepng($img);
imagedestroy($img);
?>
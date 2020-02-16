<?php
$src = imagecreatetruecolor(100, 100);
imagefilledrectangle($src, 0, 0, 90, 90, 0xfffff);
imageline($src, 0, 0, 90, 90, 0x00000);
imagesetinterpolation($src, IMG_BSPLINE);
$dst1 = imagerotate($src, 80, 0xffffff);
imagepng($src, 'rot_exp.png');
imageaffine($dst1, [1,1,1,1,1,1]);
$dst2 = imagerotate($src, 80, 0xffffff);
imagepng($dst2, 'rot_act.png');
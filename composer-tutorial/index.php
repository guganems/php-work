<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/dino.jpg')->resize(300, 200)->save('img/dino-2.jpg', 100);

echo "<img src='img/dino-2.jpg' alt=''/>";
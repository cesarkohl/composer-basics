<?php
require "vendor/autoload.php";

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/notredame.jpg')->resize(300,200)->save('img/notredame-2.jpg', 100);

echo '<img src="img/notredame-2.jpg" />';

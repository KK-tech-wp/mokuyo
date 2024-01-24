<?php
$exif = exif_read_data('images/car.jpg', 0, true);
echo "car.jpg:<br />\n";
var_dump($exif);

?>

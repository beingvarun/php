<?php
//using reference
$color = 'blue';
$settings['color'] = &$color;
$color = 'red';
echo $settings['color'];


?>
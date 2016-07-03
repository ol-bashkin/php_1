<?php

require_once('category.php');
require_once('product.php');

$cube = new Category('0001', 'Cube');

$cube_27 = new Product('Aim Disc 27"', '2490');

$cube->addToCat($cube_27);

echo '2';

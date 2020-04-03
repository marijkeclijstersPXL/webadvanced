<?php
require_once 'vendor/autoload.php';

use util\Color;
use util\ColouredPoint;
use util\Point;

$point = ColouredPoint::make(1, 2, Color::RED);
$point->print();
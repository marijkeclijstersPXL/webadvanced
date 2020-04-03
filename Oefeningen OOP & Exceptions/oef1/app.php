<?php
require_once 'vendor/autoload.php';
use \tools\Broom;
use \workers\HandyMan;

$broom = new Broom();
$handyman = new HandyMan($broom);
$handyman->work();

<?php

require_once __DIR__.'/../bootstrap/app.php';

use Styde\ImagePng;

$img = new ImagePng(assets_path('img/tower-bridge.png'));
$img->display();

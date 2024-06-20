<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    header('Access-Control-Max-Age: 86400');
    exit(0);
}

require 'kirby/bootstrap.php';

echo (new Kirby)->render();

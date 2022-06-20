<?php

use IconicCodes\LightHttp\LRequest;
use IconicCodes\LightHttp\LSession;

include "vendor/autoload.php";

$request = new LRequest;


LSession::set('name', 'Hello');


$name2 = LSession::get('name');
var_dump(['name' => $name2]);
var_dump($_SESSION);

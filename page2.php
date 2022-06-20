<?php
include "vendor/autoload.php";

use IconicCodes\LightHttp\LSession;


$name2 = LSession::get('name');
var_dump(['name' => $name2]);

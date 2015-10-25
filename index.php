<?php

require_once "lib/Bone.php";
require_once "vendor/autoload.php";

Bone::config(include 'config/config.php');
Bone::route(include 'config/route.php');
Bone::get('/',function(){
	echo "HELLO WORLD!!";
});


Bone::run();

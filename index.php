<?php

require_once "lib/Bone.php";
// require_once "vendor/autoload.php";

//run configuration
Bone::config(include 'config/config.php');
Bone::route(include 'config/route.php');

// require_once "config/setup.php";
Bone::get('/',function(){
	echo "HELLO WORLD!!";
});



Bone::run();


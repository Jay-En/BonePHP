<?php

// function initialConfiguration(){
		return array(
			'ORM'=>"eloquent",
			"DB"=>array(
		        'driver'    => 'mysql',
		        'host'      => 'localhost',
		        'database'  => 'test',
		        'username'  => 'root',
		        'password'  => 'P@ssword123',
		        'charset'   => 'utf8',
		        'collation' => 'utf8_unicode_ci',
		        'prefix'    => ''
		    ),
		    "autoload" => array(
		    	"app/Controller",
				"app/Model"
		    	),

			
			"template" => array(
				"engine" => "twig",
				"path" => "public"

				),

			"error" => array(
				"404" => "html",
				"400" => "json",


				)
// }
           );

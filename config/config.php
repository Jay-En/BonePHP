<?php

		return 	[ 
					"base_url" =>	"http://localhost/BonePHP-starter/",
		
					"mysql"		=>	[
										'driver'    => 'mysql',
										'host'      => 'localhost',
										'database'  => 'test',
										'username'  => 'root',
										'password'  => 'root',
										'charset'   => 'utf8',
										'collation' => 'utf8_unicode_ci',
										'prefix'    => ''
									],
				    "autoload" => 	[
					    				// "app/Controller",
					    				// "app/Model"
				    			  	],
				    "cookie" => 	[
				    					"name" => "hash",
				    					"expiry" => 604800
				    			  	],
				    "session" => 	[
				    					"session_name" => "session",
				    					"token_name" => "token"
				    			  	],
				    "encryption"    => [
				    				"hash" => "JustArandomTextWeCanPutHere"
				    			]

				];

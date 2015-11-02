<?php

		return [
				"/{name}" => [
							[
							 "method"=>"GET", 
							 "function"=>function($name){
							 	echo "Hello ".$name."!";
							 }
							]
					]
				];
# BonePHP
Microframework for flexible developer

a PHP microframework which goal is to provide extensibility and flexibility to developer.

Features:
* No Install
* Lightweight : ~100KB size
* Extensibility:
   -Easy to extend with composer
   -Built in autoloader to easily use custom php class
* Flexibility:
   -Multiple ORM Support including Laravel's Eloquent
   -Multiple Template Support including Propel 2
   -Handy configurations
   
   
 easy to start:

require_once "lib/Bone.php";

Bone::get('/',function(){
	echo "HELLO WORLD!!";
});

Bone::run();

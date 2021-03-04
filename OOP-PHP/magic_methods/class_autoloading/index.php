<?php
if(!function_exists('Autoloader')){
	function Autoloader($class){
		$classFile = 'class/'.$class.'.php';
		if(is_file($classFile) && !class_exists($class)){
			require_once $classFile;
		}
	}
}
spl_autoload_register('Autoloader');

//When trying to create an instance of a class, spl_autoload_register automatically
//included thes class file
$db = new Database();
$user = new User();
echo $db->Conncet('MySQl');
echo '<br/>';
echo $user->getName('User Name');
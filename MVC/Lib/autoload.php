<?php
spl_autoload_register(function ($class_name) {
	$class_name = str_replace("_", "/", $class_name);
    include_once $class_name . '.php';
});

// spl_autoload_register itself doesn't load the class or file; instead, it allows you to register a function that will be called automatically when an undefined class is encountered. The registered function (the autoloader) is responsible for loading the necessary class file.
<?php 

	function __autoload($class_name) {
	  require_once $class_name . '.php';
	}

	require_once "./bootstrap.php";

	$productController = new Controllers\ProductController($entityManager);

?>
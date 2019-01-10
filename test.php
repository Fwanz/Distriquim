<?php 
	include './src/EntityContainer.php';
	$products = $productController->findAll();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		foreach ($products as $product) {
    		echo $product->getSecuritySheet() . "<br>";
		}
 	?>
</body>
</html>
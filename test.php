<?php 
	include './src/EntityContainer.php';
	$allProducts = $productController->findAll();
	$productsByKey = $productController->findBy(['brand' => 'KRONOS']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.findAll, .findByExample{
			width: 50%;
		}
	</style>
</head>
<body>
	<div class="findByExample">
		<h2>Example of a query with params. Just pass what you want as an array</h2>
		<?php 
			foreach ($productsByKey as $product) {
	    		echo $product->getName() . "<br>";
	    		echo $product->getTechnicalSheet() . "<br>";
	    		echo $product->getSecuritySheet() . "<br><br>";
			}
 		?>
	</div>
</body>
</html>
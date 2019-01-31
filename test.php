<?php
include './src/EntityContainer.php';
$urlParts = parse_url($_SERVER['REQUEST_URI']);
// $marca = str_replace("/distriquim/", "", $urlParts['path']);
$marca = 'KRONOS';
$productsByCategory = $productController->get("p.category", "p.brand = '$marca'", true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Testing Doctrine</title>
</head>
<body>
<div class="findByExample">
    <h2>Example of a query with params. Just pass what you want as an array</h2>
    <ul>
        <?php
        foreach ($productsByCategory as $product) {
            echo utf8_encode($product['category']);
        };
        ?>
    </ul>
</div>
</body>
</html>

<?php

include 'controllers/ProductController.php';

require_once "./bootstrap.php";

//echo json_encode($entityManager->getConnection());

$productController = new ProductController($entityManager);
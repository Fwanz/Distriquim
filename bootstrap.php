<?php

require_once "vendor/autoload.php";
require_once "src/models/Product.php";

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/models"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'hacemosmarcacom1.powwebmysql.com',
    'user' => 'partner',
    'password' => 'dev42537426',
    'dbname' => 'db_distriquim',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

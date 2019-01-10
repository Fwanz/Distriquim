<?php

  namespace Controllers;

  use Doctrine\ORM\EntityManager;


  /**
   *
   */
  class ProductController
  {

    private $productRepository;
    private $entityManager;

    function __construct(EntityManager $em)
    {
      $this->entityManager = $em;
      $this->productRepository = $this->entityManager->getRepository('Product');
    }

    public function findAll()
    {
       return $this->productRepository->findAll();
    }
  }

 ?>

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

    public function findById(int $id){
      return $this->productRepository->find($id);
    }

    public function findBy(array $params)
    {
      return $this->productRepository->findBy($params);
    }
  }

 ?>

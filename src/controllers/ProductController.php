<?php

namespace Controllers;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\QueryException;


/**
 *
 */
class ProductController
{

    private $productRepository;
    private $entityManager;
    private $queryBuilder;

    function __construct(EntityManager $em)
    {
        $this->entityManager = $em;
        $this->queryBuilder = $em->createQueryBuilder();
        $this->productRepository = $this->entityManager->getRepository('Product');
    }

    public function findAll()
    {
        return $this->productRepository->findAll();
    }

    public function findById(int $id)
    {
        return $this->productRepository->find($id);
    }

    public function findBy(array $params)
    {
        return $this->productRepository->findBy($params);
    }

    public function get($attrs, $condition, $distinct = FALSE, $orderBy = NULL, $direction = 'DESC')
    {
        try {
            $this->queryBuilder->select($attrs)->from('Product', 'p')->where($condition);
            if ($distinct) {
                $this->queryBuilder->distinct(true);
            }
            if ($orderBy) {
                $this->queryBuilder->orderBy($orderBy, $direction);
            }
            $query = $this->queryBuilder->getQuery();
            return $query->getResult();
        } catch (QueryException $e) {
            return $e->getMessage();
        }
    }
}

?>

<?php

// src/Product.php

/**
 * @Entity @Table(name="products")
 * */
class Product
{

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $name;

    /** @Column(type="string") * */
    protected $brand;

    /** @Column(type="string") * */
    protected $category;

    /** @Column(type="string") * */
    protected $subcategory;

    /** @Column(type="string") * */
    protected $technical_sheet;

    /** @Column(type="string") * */
    protected $security_sheet;

//    /** @Column(type="timestamp") * */
//    protected $created_at;
//
//    /** @Column(type="timestamp") * */
//    protected $updated_at;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * @param mixed $subcategory
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;
    }

    /**
     * @return mixed
     */
    public function getTechnicalSheet()
    {
        return $this->technical_sheet;
    }

    /**
     * @param mixed $technical_sheet
     */
    public function setTechnicalSheet($technical_sheet)
    {
        $this->technical_sheet = $technical_sheet;
    }

    /**
     * @return mixed
     */
    public function getSecuritySheet()
    {
        return $this->security_sheet;
    }

    /**
     * @param mixed $security_sheet
     */
    public function setSecuritySheet($security_sheet)
    {
        $this->security_sheet = $security_sheet;
    }

    /**
     * @return mixed
    public function getProductBySubcat($brand,$subcategory)
    {
        return $this->name;
    }
     */

}

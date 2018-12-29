<?php

// src/Product.php
/**
 * @Entity @Table(name="productos")
 * */
class Product {

    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $nombre;
    
    /** @Column(type="string") * */
    protected $marca;
    
    /** @Column(type="string") * */
    protected $categoria;
    
    /** @Column(type="string") * */
    protected $subcategoria;
    
    /** @Column(type="string") * */
    protected $hoja_tecnica;
    
    /** @Column(type="string") * */
    protected $hoja_securidad;

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
    
    public function getSubcategoria() {
        return $this->subcategoria;
    }

    public function setSubcategoria($subcategoria) {
        $this->subcategoria = $subcategoria;
    }
    
    public function getHojaTectica() {
        return $this->hoja_tecnica;
    }

    public function setHojaTecnica($hoja_tecnica) {
        $this->hoja_tecnica = $hoja_tecnica;
    }
    
    public function getHojaSeguridad() {
        return $this->hoja_securidad;
    }

    public function setHojaSeguridad($hoja_seguridad) {
        $this->hoja_securidad = $hoja_seguridad;
    }

}

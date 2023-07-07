<?php

//Incluir classe produto da mesma forma que está no banco de dados // Criando objeto usuario
class Produto{
    private $id;
    private $product;
    private $price;
    private $color;
    private $size;
    private $amount;
    private $bland;

    public function getId($i){
        return $this->id = $i;
    }
    public function setId($i){
        return $this->id = trim($i);
    }

    public function setProduct($i){
        return $this->product = $i;

    }

    public function getProduct($i){
        return $this->product = trim($i);

    }

    public function getPrice($i){
        return $this->price= $i;
    }

    public function setPrice($i){
        return $this->price= trim($i);
    }

    public function getColor($i){
        return $this->color= $i;
    }

    public function setColor($i){
        return $this->color = trim($i);
    }

    public function getSize($i){
        return $this->size= $i;
    }

    public function setSize($i){
        return $this->size = trim($i);
    }

    public function getAmount($i){
        return $this->amount= $i;
    }

    public function setAmount($i){
        return $this->amount = trim($i);
    }

}

interface UsuarioDao{
    public function add(Produto $u);
    public function findAll();
    public function findById($id);
    public function update(Produto $u);
    public function delete(Produto $id);

}
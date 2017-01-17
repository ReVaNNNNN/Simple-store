<?php

class Product
{
    private $name;
    private $price;
    private $quantity;
    private $id;

    // Ograniczamy podawane parametry konstruktora do obiektów innych klas np
    // cena musi być obiektem klasy ProductPrice 
    // a ilość musi być obiektem klasy Quantity
    public function __construct($id, $name, ProductPrice $price, Quantity $quantity) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    
     public function getId() 
    {
        return $this->id;
    }
    
    public function getName() 
    {
        return $this->name;
    }
    
    public function getPrice() 
    {
        return $this->price;
    }
    
    public function getQuantity() 
    {
        return $this->quantity;
    }
}
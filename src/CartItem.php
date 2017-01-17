<?php

class CartItem
{
    private $product;
    private $quantity;
    
    public function __construct(Product $product, Quantity $quantity) 
    {
        $this->quantity = $quantity;
        $this->product = $product;
    }
    
    public function getProduct() 
    {
        return $this->product;
    
        
    }
    public function getQuantity() 
    {
        return $this->quantity;
    }
    
}


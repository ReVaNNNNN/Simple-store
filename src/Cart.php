<?php

class Cart
{
    private $customer;
    private $items;


    // Wymagamy by argumentem przekazywanym do konstruktora
    // był OBIEKT KLASY CUSTOMER !
    public function __construct(Customer $customer) 
    {
        $this->customer = $customer;
        $this->items = [];
    }
    
    public function getCustomer()
    {
        return $this->customer;
    }
    
    public function addCartItem(CartItem $cartItem) 
    {
        $this->items[] = $cartItem; 
    }
    
    public function getTotalSum() 
    {
        $sum = 0;
        
        foreach ($this->items as $item) 
        {    
            
            // Super powiązanie aby obliczyć cenę końcową
           $sum += $item->getProduct()->getPrice()->getPrice() * $item->getQuantity()->getQuantity();
        }
        
        return $sum;
    }
}


<?php

include_once 'library.php';

//klient
$customer = new Customer(1, 'Sebastian', 'Żurek');

//koszyk
$cart = new Cart($customer);

//produkt

$product1 = new Product(1, 'Buty', new ProductPrice(310), new Quantity(3));
$product2 = new Product(2, 'Spodnie', new ProductPrice(129), new Quantity(2));
$product3 = new Product(3, 'Koszulka', new ProductPrice(39), new Quantity(8));

$cart->addCartItem( new CartItem($product1, new Quantity(2)));

$cart->addCartItem( new CartItem($product3, new Quantity(4)));

//Podsumowanie

echo 'Podsumowanie koszyka: '. $cart->getTotalSum() .' zł.';
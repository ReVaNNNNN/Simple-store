<?php

include_once 'library.php';

// Przykład 1
$price = new ProductPrice(250);
new Product(1, 'Buty', $price, new Quantity(1));

// Przykład 2 - możemy podać od razu jako parametr utworzenie nowego innego obiektu
// na podstawie (konstruktora) innej klasy która ma za zadanie np sprawdzić 
// poprawność danych
$product = new Product(2, 'Koszulka', new ProductPrice(80), new Quantity(2));

// Wywołanie metod getPrice() z klasy Product a następnie z klasy ProductPrice
echo 'Cena: '. $product->getPrice()->getPrice() .'<br>';

// Wywołanie metody getQuantity() klasy Product
// a następnie wywołanie metody getQuantity() klasy Quantity na utworzonym
// obiekcie pod zmienna $product

echo 'Ilość: '. $product->getQuantity()->getQuantity() .'<br>';

$customer1 = new Customer(1, 'Jan', 'Kowalski');

// Wyświetlenie klienta
echo 'Klient: ';
echo $customer1->getFirstName() .' '. $customer1->getLastName() .'<br>';

// Utworzenie koszyka
$cart = new Cart($customer1);


// Pobranie klienta z koszyka i wyświetlenie jego imienia
echo $cart->getCustomer()->getFirstName();


$ktos = new Customer(5, 'Ja', 'Nowak');
$a = new Cart($ktos);

echo $a->getTotalSum();
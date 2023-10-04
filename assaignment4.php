<?php 


class Product {
    // TODO: Add properties
    private $id;
    private $name;
    private $price;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method
    function getFormattedPrice(){
        return number_format($this -> price,2);
    }


    // TODO: Add showDetails method
    function showDetails(){
        echo "Product Id: {$this->id} \n";
        echo "Product Name: {$this -> name} \n";
        echo "Product Price: {$this-> price} \n";
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();



/*
Expected Output:


Product Details:
- ID: 1
- Name: T-shirt
- Price: $19.99

*/




















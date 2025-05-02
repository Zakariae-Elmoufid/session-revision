<?php 

interface Cart {
    public function addProduct(Product $product,$quantity);
    public function removeProduct(Product $product);
    public function function displayItem();
}
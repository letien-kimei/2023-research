<?php 
require_once("./ProductFactory.php");
require_once("./Products.php");

class Electronics extends Products implements ProductFactory  {
    
    public function calculatePrice() {

    }
    
}
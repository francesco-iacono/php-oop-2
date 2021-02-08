<?php 

    class Product {

      public $code;
      public $name;
      public $brand;
      public $price;
      public $img;

      function __construct($code, $name, $brand, $price, $img) {
        $this->code = $code;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->img = $img;
      }
    }
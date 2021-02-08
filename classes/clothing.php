<?php

   require_once __DIR__ . "/product.php";

      class Clothing extends Product {

        public $colors;
        public $collection;
        private $discount;


        function __construct($code, $name, $brand, $price, $img, $colors, $collection) {
          parent::__construct($code, $name, $brand, $price, $img);
          $this->colors = $colors;
          $this->collection = $collection;
        } 

        public function getDiscount($collection) {

          if ($collection < 2020) {
          return $this->discount = 20;
          }
        }
      }


      /*
      $prod = new Clothing("1023", "Felpa con cappuccio", "Adidas", "60", "blue", "2019" );
      var_dump($prod);
      echo $prod->getDiscount(2019); */
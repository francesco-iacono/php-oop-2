<?php 

  require_once __DIR__ . "/product.php";

  class Wine extends Product {

    public $vintage;

    function __construct($code, $name, $brand, $price, $img, $vintage) {
      parent::__construct($code, $name, $brand, $price, $img);
      $this->vintage = $vintage;
    } 

  }
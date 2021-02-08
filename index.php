<?php 
   require_once __DIR__ . "/classes/clothing.php";
   require_once __DIR__ . "/classes/wines.php";

   $clothing1 = new Clothing("1023", "Felpa con cappuccio", "Adidas", "60", "https://images-na.ssl-images-amazon.com/images/I/A1K-fMb3BtL._AC_UY879_.jpg", "grigio", "2019" );
   $clothing2 = new Clothing("1024", "Felpa con cappuccio", "Adidas", "60", "https://images-na.ssl-images-amazon.com/images/I/81SjOdt5-hL._AC_UY879_.jpg", "nero", "2016" );

   $wine1 = new Wine("4958", "Gattinara Riserva", "Travaglini", "30", "https://s.tannico.it/media/catalog/product/cache/1/thumbnail/500x500/0dc2d03fe217f8c83829496872af24a0/t/r/trava2_1_2_2_1_2.jpg", "2012");
   $wine2 = new Wine("4959", "Sassicaia", "Tenuta San Guido", "200", "https://s.tannico.it/media/catalog/product/cache/1/thumbnail/500x500/0dc2d03fe217f8c83829496872af24a0/e/b/ebty0000070960_1.jpg", "2002");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Amazon</title>
</head>
<body>
  <header>
    <img src="https://loghi-famosi.com/wp-content/uploads/2020/04/Amazon-Logo.png" alt="">
  </header>
  <main>
     <section class="category">
      <h3>Abbigliamento</h3>
      <div class="cards">
       <div class="card">
        <img src="<?php echo $clothing1->img; ?>" alt="">
        <p><?php echo $clothing1->name;  ?></p>
        <p><?php echo $clothing1->brand;  ?></p>
        <p>Sconto vecchia collezione <?php echo $clothing1->getDiscount($clothing1->collection ); ?>% </p>
       </div>
       <div class="card">
        <img src="<?php echo $clothing2->img; ?>" alt="">
        <p><?php echo $clothing2->name;  ?></p>
        <p><?php echo $clothing2->brand;  ?></p>
        <p>Sconto vecchia collezione <?php echo $clothing2->getDiscount($clothing2->collection ); ?>% </p>
       </div>
      </div>
    </section>
    <section class="category"> 
      <h3>Vini</h3>
      <div class="cards">
       <div class="card">
        <img src="<?php echo $wine1->img; ?>" alt="">
        <p><?php echo $wine1->name;  ?></p>
        <p><?php echo $wine1->brand;  ?></p>
        <p><?php echo $wine1->vintage;  ?></p>
       </div>
       <div class="card">
        <img src="<?php echo $wine2->img; ?>" alt="">
        <p><?php echo $wine2->name;  ?></p>
        <p><?php echo $wine2->brand;  ?></p>
        <p><?php echo $wine2->vintage;  ?></p>
       </div>
      </div>
    </section>
  </main>
</body>
</html>
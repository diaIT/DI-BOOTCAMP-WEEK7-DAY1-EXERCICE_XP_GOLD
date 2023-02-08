<?php 

require 'index.php';


 $product1 = new Product('iPhone 12 ', 'This is a great iPhone ', 799.99);
 $product2 = new Product('iPhone 12 pro', 'This is a great iPhone', 99.99);
 
 $product1->detail();

 ?>
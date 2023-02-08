<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 
<?php 

class Product
{
	public $name;
	public $description;
	public $price;
}
$product=new Product;
$product->name="iPhone 14";
echo $product->name."\n";

$product2=new Product;
$product2->name="iPhone 14 pro";
echo $product2->name;

 ?>


</body>
</html>
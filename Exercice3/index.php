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

   public function __construct($name,$description,$price)
   {
      $this->name=$name;
      $this->description=$description;
      $this->price=$price;
   }
   public function detail()
   {
     echo $this->name;
     echo $this->description;
     echo $this->price;

   }
}



  ?>
</body>
</html>
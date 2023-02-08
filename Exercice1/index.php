<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
 <?php 
/**
 * 
 */
class MyCalculator
{
 public $numb1;
 public $numb2; 

  public function add( $numb1, $numb2)
   {
     echo $numb1+$numb2 .'<br>';
   }

    public function multiply( $numb1, $numb2)
   {
     echo $numb1-$numb2 .'<br>';
   }

    public function subtract( $numb1, $numb2)
   {
     echo $numb1*$numb2 .'<br>';
   }
 
}
   $mycalc=new MyCalculator;
   $mycalc->add(16,2);
   $mycalc->multiply(16,2);
   $mycalc->subtract(16,2);

  ?>
</body>
</html>
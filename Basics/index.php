
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "My first PHP Code ";
$x = 5;      // $x is an integer
$y = "John"; // $y is a string
echo $x;
echo $y;

$txt1 = "hello guys";
$txt2 = "Krishan Surela";
$a = 9;
$b = 15;

print "<h2>" . $txt1 . "</h2>";
print "This is " . $txt2 . "<br>";
print $a + $b ."<br>";

$x = 10;
var_dump($x);

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
echo __dir__."<br>";

echo __file__."<br>";

function myValue(){
    return __function__; // return function name
}
echo myValue()."<br>";// myValue

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y <br>";
  }
  //color :red
  //model : Volvo

  function addNumbers(float $a, float $b){
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2);
?>
</body>
</html>

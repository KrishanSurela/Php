## Operator are used to perform operations on variables and value.

## Type of Operators =>

-   Arithmetic Operators (+ , - , \* , / , % , ** Exponential $x ** $y x ki power y)
-   Assignment Operators (= , += , -= , \*= , /= , %=)
-   Comparison operators (== ,=== , != , <> , !== , > , < , >= ,<=>)
-   Increment / Decrement Operator
-   Logical Operators (and , or ,xor ,&& , || , !)
-   String Operators (. , .=)
-   Array Operators (+,== ,===,!= , <>,!==)
-   Conditional Assignment operators(? :)

## foreach loop =>

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}
//red
//green
//blue
//yellow
```

### Print both the key and the value from the associative array

```php
$members = array("Peter"=>"35" , "Ben" => "37" , "Joe" => "43");

foreach($members as $x => $y){
    echo "$x : $y <br>";
}

//Peter : 35
//Ben : 37
//Joe : 43
```

### The foreach Loop on Objects

```php
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
```

### foreach by reference =>

#### When looping through the array items, any changes done to the array item will, by default, NOT affect the original array:

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

print_r($colors);
// Output =>
Array
(
    [0] => red
    [1] => green
    [2] => blue
    [3] => yellow
)

```

#### BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array.

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as &$x) {
  if ($x == "blue") $x = "pink";
}

print_r($colors);
// Output =>
Array
(
    [0] => red
    [1] => green
    [2] => pink
    [3] => yellow
)
```

## Alternative Syntax of foreach

```php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;

```



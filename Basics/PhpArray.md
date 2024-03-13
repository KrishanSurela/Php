## Arrays =>

### An array is a special variable that can hold many values under a single name,and WE can access the values by referring to an index number or name.

### Types of Arrays in php =>

-   Indexed Arrays -> Arrays with a numberic index.
-   Associative Arrays -> Arrays with named keys
-   Multidimentional arrays -> Arrays containig one or more arrays.

## Array Operation =>

-   Create
-   Access
-   Update
-   Add array items
-   Remove array items
-   Sort array

## Arrays Items =>

### Arrays items can be of any data type.

-   The most common are strings and numbers (int,float) , but array items can also be objects , functions or even arrays.

-   In php we can have different datatypes in the same array.

```php

$myArr = array("Volvo",15,["apples","oranges"],myFunciton);
```

## Arrays Functions =>

```php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);//3

=> arrays() => create an array
array_change_key_case(array,case) => it changes all keys in array to lowercase or uppercase.

=> array_column() => get column of specified name from a resultset.

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);
$last_names = array_column($a, 'last_name');
print_r($last_names);

//output
Array
(
  [0] => Griffin
  [1] => Smith
  [2] => Doe
)
=> array_combine() => it creates an array by using elements from one "keys" array and one "values" array.

- Both arrays must have equal numbers of elements.

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$c=array_combine($fname,$age);
print_r($c);
//output
 Array ( [Peter] => 35 [Ben] => 37 [Joe] => 43 )

=> array_count_values() => Count all the values of an arrays.

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
//Array ( [A] => 2 [Cat] => 1 [Dog] => 2 )

=> array_diff() => Compare the values of two arrays, and return the differences.
- This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc.

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);

//Array ( [d] => yellow )

=> array_diff_assoc() => Compare the keys and values of two arrays ,return the differences.

$a1 = array("a"=> "red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=> "red","b"=>"green","c"=>"blue");

$result = array_diff_assoc($a1,$a2);
print_r($result);
//Array ( [d] => yellow )

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
//Array ( [a] => red [b] => green [c] => blue [d] => yellow )

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"red","b"=>"green","g"=>"blue");

$result=array_diff_assoc($a1,$a2,$a3);
print_r($result);
//Array ( [c] => blue [d] => yellow )

=> array_diff_key() => Compare the keys of two arrays , and return the difference.

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
//Array ( [b] => green )

=> array_fill() => fill an array with values
$a1=array_fill(3,4,"blue");
print_r($a1);
// Array ( [3] => blue [4] => blue [5] => blue [6] => blue )

=>array_fill_keys() => fill an arrya with values , specify keys

$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);
//Array ( [a] => blue [b] => blue [c] => blue [d] => blue )


```

### => array_push() => function to add a new item, the new item will get the index 3

```php
array_push($cars,"Ford");
var_dump($cars);

```

## Associative Array => Pair of Key-value

```php
$a = array("brand" =>"Ford","Model"=>"Mustang", "Year"=>1964);
```

## Access Associative Array =>

```php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
// Mustang
```

## Loop Through an associative array

```php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
//brand: Ford
//model: Mustang
//year: 1964
```

## Create an Array =>

```php
$cars = array("Volvo","BMW","Toyato");
```

## Multiples Lines => Line breaks are not important , so an array declaration can span multiple lines.

```php
$car = [
  "volvo",
  "BMW",
  "Toyato"
]
```

## Trailing Comma => A comma after the last item is allowed.

## Array Keys => When creating indexed arrays the keys are given automatically , starting at 0 and increased by 1 for each item, so the array above could also be created with keys.

```php
$cars = [
  0 => "Volvo",
  1 => "BMW",
  2 =>"Toyota"
];
```

-   Notes :-> indexed array are the same as associative arrays, nut associative arrays have names instead of numbers:

## Declare Empty Array =>

### we can declare an empty array first, and add items to it later.

```php
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
```

### The same goes for associative arrays, you can declare the array first, and then add items to it.

```php
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
```

## Mixing Array Key => We can have arrays with both indexed and named keys.

```php
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
var_dump($myArr);
//array(3) {
//   [0]=>
//   string(6) "apples"
//   [1]=>
//   string(7) "bananas"
//   ["fruit"]=>
//   string(8) "cherries"
// }
```

## Access Array =>

```php
// for simple array
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];

//for associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];

//using Double or single quotes
echo $cars["model"];
echo $cars['model'];


```

## Execute a function item =>

### Array items can be of any data type , including functions.

### To execute such a function, use the index number followed by parenthesis().

```php
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();

```

### use the key name when a function is an item in a associative array.

```php
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();
```

## Update array items =>

```php
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";

$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
```

## Update Array Items in a ForeEach Loop =>

```php
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);

```

## Add Array items =>

### To add items to an existing array, we can use the bracket [] .

```php
$fruits = array("Apple", "Banana", "Cherry");
$fruits = ["Orange"];
```

### Associative Arrays =>

```php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
```

### Add Multiple Array Items =>

```php
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");
```

### Add Multiple Items to Associative Arrays =>

#### To add multiple items to an existinf array , we can use the += Operators.

```php
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
```

## Remove Array Items =>

### To remove an existing item from an array, we can use the array_splice() function.

### With the array_splice() function we specify the index (Where to start) and how many items we want to delete.

### After the deletion, the array gets reindexed automtically, starting at index 0.

```php

$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($car);
//array(2) {
//   [0]=>
//   string(5) "Volvo"
//   [1]=>
//   string(6) "Toyota"
// }
```

## Using the Unset Function =>

### The unset() function does not re-arrange the indexes,meaning that after deletion the array will no longer contain the missing indexes.

```php
array(2) {
  [0]=>
  string(5) "Volvo"
  [2]=>
  string(6) "Toyota"
}
// 1th index in skiping
```

## Remove Multiple Array Items =>

```php
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);

// Volvo

$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);

//array(1) {
//  [2]=>string(6) "Toyota"
// }
```

## Remove Item from an Associative array =>

```php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);
//output
array(2) {
  ["brand"]=>
  string(4) "Ford"
  ["year"]=>
  int(1964)
}
```

## Remove Items from an associative array using array_diff() function

### This functions returns a new array, without the specified items.

### this funcion takes values as parameters, and not keys.

```php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
//output

array(1) {
  ["brand"]=>
  string(4) "Ford"
}

```

## Remove Last item => The array_pop() function removes the last item of an array.

```php

$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);
//
array(2) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(3) "BMW"
}
```

## Remove the first Item =>

### array_shift() function removes the first item of an array.and Arrange index automatically

```php
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
//output
array(2) {
  [0]=>
  string(3) "BMW"
  [1]=>
  string(6) "Toyota"
}
```

## Php Sorting Arrays => The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

-   sort() - sort arrays in ascending order
-   rsort() - sort arrays in descending order
-   asort() - sort associative arrays in ascending order, according to the value
-   ksort() - sort associative arrays in ascending order, according to the key
-   arsort() - sort associative arrays in descending order, according to the value
-   krsort() - sort associative arrays in descending order, according to the key

```php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
// Output =>
// BMW
// Toyota
// Volvo

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
//2
// 4
// 6
// 11
// 22

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
//22
//11
//6
//4
//2

//Sort Array (Ascending Order), According to Value - asort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
// Key=Peter, Value=35
// Key=Ben, Value=37
// Key=Joe, Value=43

=> Sort Array (Ascending Order), According to Key - ksort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

// Key=Ben, Value=37
// Key=Joe, Value=43
// Key=Peter, Value=35

=> Sort Array (Descending Order), According to Key - krsort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
// Key=Peter, Value=35
// Key=Joe, Value=43
// Key=Ben, Value=37
```

## Multidimentional Array =>

### This type of array containing one or more arrays.

```php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
```
## Array Function
### array_flip() =>  	Flips/Exchanges all keys with their associated values in an array
### array_keys() => Returns all keys of an array.
### array_merge() => Merges one or more arrays into one array.
### array_pad() => Insert specified number of items, with a specified value, to an array.
```php
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
//
Array ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )
```
### array_product() => Calculates the product of the values in an array.

### array_replace() => Replace the values of the first array($a1) with the values from the second array($a2)

```php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
//
Array ( [0] => blue [1] => yellow )
```
### array_values() => Return all the values of an array(not the keys).

```php
$a = array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_value($a));

// Array ( [0] => Peter [1] => 41 [2] => USA )
```
### current() => Output the value of the current element in an array:

```php
$people = array("Peter","Joe","Glen","Cleverland");

echo current($people)."<br>";




```

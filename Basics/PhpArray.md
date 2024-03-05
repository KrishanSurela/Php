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

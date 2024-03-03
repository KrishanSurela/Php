## Functions => A function is a block of statements that can be used repeatedly in a program.

-   Built-in Functions
-   User defined Functions

## Create a Function =>

```php
function myMessage() {
  echo "Hello world!";
}
myMessage();
```

## Functions with Arguments =>

```php
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
=>
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
```

## Default Argument Value =>

```php
function setHeight($minheight = 50) {
 echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
```

## Returning Values =>

```php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
```

## Passing Arguments by reference =>

### In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

### When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used.

```php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;//7
```

## Variable Number of Arguments =>

### By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function.

-   Note :- The variadic function argument becomes an array.

### Example -> A function that dont know how many arguments it will get:

```php
function sumMyNumbers(...$x) {
  $sum = 0;
  for($i = 0; $i < count($x); $i++) {
    $sum += $x[$i];
  }
  return $sum;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
```

### Note -> The variadic argument must be the last arguments. ex. function myFamily($lastname , ...$firstname)

```php
function myFamily($lastname , ...$firstname){
    $txt="";
    for($i=0;$i<count($firstname);$i++){
        $txt =$txt."Hi , $firstname[$i] $lastname"."<br>";
    }
    return $txt;
}
$a = myFamily(Surela,Krishan,Deepak,Monu,Pankaj);
echo $a;
```

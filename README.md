# PHP NOTES

## Php -> HyperText Preprocessor

### PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

### PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.

### PHP is an acronym for "PHP: Hypertext Preprocessor"

### PHP is a widely-used, open source scripting language

### PHP scripts are executed on the server

### PHP is free to download and use

## PHP Case Sensitivity

-   In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

#### Look at the example below; only the first statement will display the value of the $color variable! This is because $color, $COLOR, and $coLOR are treated as three different variables:

```php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
```

## PHP Comments

#### A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.

```php
// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line comment */
```

## PHP Variables

#### Variables are "containers" for storing information.

#### In PHP, a variable starts with the $ sign, followed by the name of the variable.

#### A variable name must start with a letter or the underscore character

#### A variable name cannot start with a number

#### A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and \_ )

#### Variable names are case-sensitive ($age and $AGE are two different variables)

```php
$x = 5;
$y = "John"
```

-   Note: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.

-   Notice that we did not have to tell PHP which data type the variable is.

-   PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

### Variable Scope in php

#### The scope of a variable is the part of the script where the variable can be referenced/used.

#### PHP has three different variable scopes:

-   local
-   global
-   static

### Global and Local Scope :-

#### A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

```php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
```

#### A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function

```php
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
```

### Global Keyword ->

#### The global keyword is used to access a global variable from within a function.

#### To do this, use the global keyword before the variables (inside the function)

```php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
```

### Static Keyword ->

#### Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

#### To do this, use the static keyword when you first declare the variable

```php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
```

#### Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.

### echo and print Statements ->

#### The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

#### The echo statement can be used with or without parentheses: echo or echo().

#### The print statement can be used with or without parentheses: print or print().

### PHP supports the following data types:

#### Variables can store data of different types, and different data types can do different things.

-   String
-   Integer
-   Float (floating point numbers - also called double)
-   Boolean
-   Array
-   Object
-   NULL
-   Resource

### Getting the Data Type ->

#### We can get the data type of any object by using the var_dump() function.

```php
$x = 5;
var_dump($x);
```

Output ->

```php
int(5)
```

## 1. String ->

#### A string is a sequence of characters, like "Hello world!".

#### A string can be any text inside quotes. We can use single or double quotes.

```php

$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);
```

Output ->

```php

string(12) "Hello world!"
string(12) "Hello world!"
```

## 2. Integer ->

#### An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

### Rules for integers:

-   An integer must have at least one digit
-   An integer must not have a decimal point
-   An integer can be either positive or negative
-   Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

## 3. Float ->

#### A float (floating point number) is a number with a decimal point or a number in exponential form.

#### In the following example $x is a float. The PHP var_dump() function returns the data type and value:

```php
$x = 10.365;
var_dump($x);
```

### Output ->

```php
float(10.365)
```

## 4. Boolean ->

#### A Boolean represents two possible states: TRUE or FALSE.

#### Booleans are often used in conditional testing.

```php
$x = true;
var_dump($x);
```

### Output ->

```php
bool(true)
```

## 5. Array ->

#### An array stores multiple values in one single variable.

```php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
```

### Output ->

```php
array(3) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(3) "BMW"
  [2]=>
  string(6) "Toyota"
}
```

## 6. Object ->

#### Classes and objects are the two main aspects of object-oriented programming.

#### Class is the collection of the data member and member methods and also a blueprint or Template for an object.

#### Object is a class type variable and it have individual entity based on class blueprint. It is known as instance.

#### When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

#### If we create a \_\_construct() function, PHP will automatically call this function when you create an object from a class.

```php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

echo $myCar->message();
```

### Output ->

```php
My car is a red Volvo
```

## 7. NULL ->

-   Null is a special data type which can have only one value: NULL.

-   A variable of data type NULL is a variable that has no value assigned to it.

-   Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

-   Variables can also be emptied by setting the value to NULL

```php
$x = "Hello world!";
$x = null;
var_dump($x); // NULL
```

## Change Data Type ->

-   If we assign an integer value to a variable, the type will automatically be an integer.

-   If we assign a string to the same variable, the type will change to a string:

#### Example

```php
$x = 5;
var_dump($x); //int(5)

$x = "Hello"; //string(5)
var_dump($x);
```

#### Note:-

-   If we want to change the data type of an existing variable, but not by changing the value, we can use casting.

-   Casting allows us to change data type on variables

```php
$x = 5;
$x = (string) $x;
var_dump($x);
```

# String in PHP =>

#### A string is a sequence of characters, like "Hello world!".

#### A string can be any text inside quotes. We can use single or double quotes.

#### Note There is a big difference between double quotes and single quotes in PHP.

-   Double quotes process special characters, single quotes does not.

```php
$x = "John";
echo 'Hello $x';//Hello $x

echo "Hello $x";// Hello John
```

## String Functions ->

### String length ->

#### The PHP strlen() function returns the length of a string.

```php
echo strlen("Hello world!");//12
```

### Word Count ->

#### Count the number of word in the string "Hello world!":

```php
echo str_word_count("Hello world!");//2
```
### Search For Text Within a String ->

#### The PHP strpos() function searches for a specific text within a string.

#### If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

#### The first character position in a string is 0 (not 1).

```php
echo strpos("Hello world!", "world");//6
```



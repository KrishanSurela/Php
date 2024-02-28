# PHP NOTES

## Php ->

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

### str_word_count() ->

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
echo stripos("Hello world!", "WORLD"); //6 case insensitive
```

### PHP addcslashes() Function =>

#### The addcslashes() function returns a string with backslashes in front of the specified characters.

-   Note: The addcslashes() function is case-sensitive.

```php
<?php
$str = addcslashes("Hello World!","W");
echo($str);
?>

//Hello \World!
```

### PHP addslashes() Function=>

#### The addslashes() function returns a string with backslashes in front of predefined characters.

-   The predefined characters are:

-   single quote (')
-   double quote (")
-   backslash (\)
-   NULL

```php
<?php
$str = addslashes('What does "yolo" mean?');
echo($str);
?>
//output

What does \"yolo\" mean?
```

### PHP bin2hex() Function =>

#### The bin2hex() function converts a string of ASCII characters to hexadecimal values. The string can be converted back using the pack() function.

```php
<?php
$str = bin2hex("Hello World!");
echo($str)."<br>";
echo pack("H*",$str);
?>
//output
48656c6c6f20576f726c6421
Hello World!
```

### PHP chop() Function=>

#### Remove characters from the right end of a string:

```php
  <?php
    $str = "Hello World!";
    echo $str . "<br>";
    echo chop($str,"World!");
    ?>

//output
Hello World!
Hello
```

### PHP chr() Function=>

#### The chr() function returns a character from the specified ASCII value.

-   The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.

```php

<?php
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>
// 4
//*
//R

<?php
$str = chr(046);
echo("You $str me forever!");// You & me forever
?>
```

### PHP chunk_split() Function =>

#### The chunk_split() function splits a string into a series of smaller parts.

-   Note: This function does not alter the original string.

```php
  <?php
  $str = "Hello world!";
  echo chunk_split($str,1,".");
  ?>

  //output
  H.e.l.l.o. .w.o.r.l.d.!.
```

### explode() => The explode() function breaks a string into an array.

-   Note: The "separator" parameter cannot be an empty string.

-   Note: This function is binary-safe.

```php
<?php
$str = 'one,two,three,four,five';

// zero limit
print_r(explode(',',$str,0));
print "<br>";

// positive limit
print_r(explode(',',$str,2));
print "<br>";

// negative limit
print_r(explode(',',$str,-1));
?>

//output

Array ( [0] => one,two,three,four,five )
Array ( [0] => one [1] => two,three,four,five )
Array ( [0] => one [1] => two [2] => three [3] => four ) // total me 1 kmm
```

### implode() => The implode() function returns a string from the elements of an array.

```php
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
?>

//output=>
Hello World Beautiful Day!
```

### join() => The join() function returns a string from the elements of an array.

-   The join() function is an alias of the implode() function.

```php
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
?>
//output
Hello World Beautiful Day!
```

### PHP fprintf() Function=>

#### Write some text to a text file named "test.txt"

```php
  $number = 9;
  $str = "Beijing";
  $file = fopen("test.txt","w");
  echo fprintf($file,"There are %u million bicycles in %s.",$number,$str); //40


  The following text will be written to the file "test.txt".
  There are 9 million bicycles in Beijing.


```

### lcfirst() => Converts the first character of a string to lowercase.

### ltrim() => Removes whitespace or other characters from the left side of the string.

### print() => outputs one or more strings. this function is slighter slow than echo.

### rtrim() => Removes whitespace or other characters from the right side of a string.

### str_ireplace() =>(case -insensitive) The str_ireplace() function replaces some characters with some other characters in a string.

```php
<?php
echo str_ireplace("WORLD","Peter","Hello good world!");
?>
// Hello good Peter
```

### str_replace() => Replaces some character in a string (case-sensitive)

```php
str_replace("replaceable word","replacement",string)
echo str_replace("world","Peter","Hello world!");
//Hello Peter!
```

### str_repeat() => Repeat a string a specified number of times.

```php

<?php
echo str_repeat("Wow",13);
?>
//WowWowWowWowWowWowWowWowWowWowWowWowWow
```

### str_shuffle => Randomly shuffiles all characters in a string.

```php
<?php
echo str_shuffle("Hello World");
?>
//HroW lloeld
//Try to refresh the page. This function will randomly shuffle all characters each time.
```

### str_split() => Split a string into an array

```php
<?php
print_r(str_split("Hello World"));
?>
//Array ( [0] => H [1] => e [2] => l [3] => l [4] => o [5] => [6] => W [7] => o [8] => r [9] => l [10] => d )
```

### strcasecmp() => Compare two strings (case-insensitive).

```php
echo strcasecmp("Hello world!","HELLO WORLD!");
//0
// if output is 0 means these two strings are equal.
```

### strchr() => find the first occurance of a string inside another string and return rest of the string after find occurance. this function is case-sensitive.

-   This function is alias of strstr() function.And this function is also case-sensitive. for case-insensitive we can use stristr() function.

```php
echo strchr("Hello Krishan is so handsome man","Krishan");
//Krishan is so handsome man

//Opposite

echo strchr("Hello Krishan is so handsome man","is",true);
// Hello Kr

echo stristr("Hello world!","WORLD"); // case-insensitive
// world!
```

### strtolower() => Converts a string to lowercse letters.

### strtoupper() => Converts a string to uppercase letters.

```php
echo strtoupper("Hello WORLD!");

// HELLO WORLD!
```

### substr() => return a part of a string.

```php
echo substr("Hello world",6);//world
echo substr("Hello world",-4);//orld
echo substr("Hello world",-4,2) //or
echo substr("Hello world",1,2) //el


substr(string,start,length)

Start =>

- A positive number => Start at a specified position in the string
- A negative number => Start at a specified position from the end of the string.
- 0 => start at the first character in string.

length =>
- A positive number - The length to be returned from the start parameter
- Negative number - The length to be returned from the end of the string
- If the length parameter is 0, NULL, or FALSE - it return an empty string
```

### substr_count() => Counts the number of times a substring occurs in a string.

```php
echo substr_count("Hello world Krishan. The world is nice","is");//2

echo substr_count("Hello world Krishan. The world is nice","is",13,7);//1
```

### substr_replace() => this function replaces a part of a string with another string.

```php
substr_replace(string,replacement,start,length)

echo substr_replace("My Name is Krishan. I am from Bansur","Anil",11,7);
// My Name is Anil. I am from Bansur

echo substr_replace("Hello world","earth",6);
// Hello earth
```

### trim() => Removes whitespaces or other character from both side of a string.

```php
$str = "Hello World!";
echo $str . "<br>"; // Hello World!
echo trim($str,"Hed!"); // llo Worl

```

### ltrim() => Removes whitespace or other predefined characters from the left side of a string

### rtrim() => Removes whitespace or other predefined characters from the right side of a string

### ucfirst() => Converts the first character of a string to uppercase

```php
echo ucfirst("hello world! my name is krishan");
//  Hello world! my name is krishan
```

### ucwords() => Converts the first character of each in a string to uppercase.

```php
echo ucwords("hello world");// Hello World!
```

## PHP Casting =>

-   (string) - Converts to data type String
-   (int) - Converts to data type Integer
-   (float) - Converts to data type Float
-   (bool) - Converts to data type Boolean
-   (array) - Converts to data type Array
-   (object) - Converts to data type Object
-   (unset) - Converts to data type NULL

## PHP Math =>

### pi() function => return value of pi

### min() and max() => find lowest and greatest value in a list of arguments

```php
echo(min(0, 150, 30, 20, -8, -200));//-200
echo(max(0, 150, 30, 20, -8, -200));//150
```

### abs() => The abs() function returns the absolute (positive) value of a number:

```php
echo(abs(-6.7)); //6.7
```

### sqrt() => return the square root of the given value.

```php
echo(sqrt(64) . "<br>"); //8
echo(sqrt(0) . "<br>"); //0
echo(sqrt(1) . "<br>"); //1
echo(sqrt(9)); //3
```

### round() => It rounds a floating-point number to its nearest integer.

```php
echo(round(0.60) . "<br>"); //1
echo(round(0.50) . "<br>"); //1
echo(round(0.49) . "<br>"); //0
echo(round(-4.40) . "<br>"); //-4
echo(round(-4.60)); //-5
```

### rand() function => it generate a random number.

```php
echo(rand(10, 100));//67
// each time the value will be changing.
```



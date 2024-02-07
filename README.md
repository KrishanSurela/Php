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

### PHP supports the following data types:

-   String
-   Integer
-   Float (floating point numbers - also called double)
-   Boolean
-   Array
-   Object
-   NULL
-   Resource

### Variable Scope in php

#### The scope of a variable is the part of the script where the variable can be referenced/used.

#### PHP has three different variable scopes:

-   local
-   global
-   static

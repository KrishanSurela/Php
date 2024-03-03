## PHP Constants => Constants are like variables, except that once they are defined they cannot be changed or undefined.

-   A Constant is an idetifier (name) for a simple value. The value cannot be changed during the script.

-   A valid constant name starts with a letter of underscore (no $ sign before thhhe constant name).

### Note -> Unlike variables , constants are automatically global across the entire script.

## Create a PHP Constant =>

```php
define(name,value,case-insensitive);

// case-insensitive constant name =>true
// by default false.
define("GREETING", "Welcome to india!", true);
echo greeting; // Welcome to india!

// case-insensitive constant name =>false
define("GREETING", "Welcome to india!", false);
echo greeting; // greeting
echo GREETING;
```

## Using const keyword =>

```php
const MYCAR = "VOLVO";
echo MYCAR; // VOLVO
```

### Difference between const vs. define() =>

-   const are always case -sensitive.
-   define() has a case-insensitive option.
-   const can not be created inside another block scope, like inside a function or inside an if statement.

-   define can be created inside anotherr block scope.

### Constant Arrays =>

```php
define ("cars",[
    "Alfa Romeo",
    "BMW",
    "TATA",
    "Jguear"
]);

echo cars[1];
```

###

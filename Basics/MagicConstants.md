## PHP Predefined Constants

### PHP has nine predefined cosntants that change value depending on where they are used, and therefor they are called "Magic Constants".

-   These magic constants are written with a double underscore at the start and the end , except for the Classname :: class constant.

-   The magic constants are case - insensitive , meaning **LINE** return the same as **line**.

## Type of Magic Constant =>

```php
- __CLASS__ => if used inside a class , the class name is returned.
- __DIR__ => Directory of file

- __FILE__ => Filename including full path

- __FUNCTION__ => if used inside a function , the function name is returned.

- __LINE__ => the current line number

- __METHOD__ => if used inside a function that belongs to a class , both class and function name is returned.

- __NAMESPACE__ => if used inside a namespace , the name of the namespace is returned.

- __TRAIT__ => if used inside a trait , the trait name is returned.

- ClassName :: class => Returns the name of the specified class and the name of the namespace, if any.

```

## Example 1. =>

```php
class Fruits {
    public function myValue(){
        return __class__; // return class name
    }
}

$kiwi = new Fruits();

echo $kiwi->myValue();// Fruits
```

## Example 2. =>

```php
echo __dir__."<br>";
//F:\2. CHAI PREMIUM\JAVASCRIPT CHAI\Php\Basics
```

## Example 3. =>

```php
echo __file__;
//F:\2. CHAI PREMIUM\JAVASCRIPT CHAI\Php\Basics\index.php
```

## Example 4. =>

```php
function myValue(){
    return __function__;
}
echo myValue();
```

## Example 5. =>

```php
echo __LINE__; // return line number in code file
```

## Example 6. =>

```php
class Fruits {
    public function myValue(){
        return __method__;
    }
}

$kiwi = new Fruits();

eho $kiwi->myValue();
// Fruits :: myValue
```

## Example 7. =>

```php
namespace myArea;

function myValue(){
    return __namespace__;
}

echo myValue();
```

## Example 8. => returned the trait name

### Traits => Traits is a powerful machanism which is the collection of functions. and shares thses functionality among class without using multiple inheritance (which does not supported by php).

-   traits can be injected function to the class
-   if traits is designed in class , then all the function inside the traits are also a part of class.

```php
trait message1{
    public function msg1(){
        echo __trait__;
    }
}
class Welcome{
    use message1;
}

$obj = new Welcome();
$obj->msg1();// message1
```

## Example 8. => Returns the name of the specified class and the name of the namespace, if any.

```php
namespace myArea;

class Fruits {
  public function myValue(){
    return Fruits::class;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();//myArea\Fruits
```

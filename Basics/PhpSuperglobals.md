## Global Variables => Superglobals

### Some predefined variables in php are "superglobals",which means that they are always accesible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

-   $GLOBALS
-   $\_SERVER
-   $\_REQUEST
-   $\_POST
-   $\_GET
-   $\_FILES
-   $\_ENV
-   $\_COOKIE
-   $\_SESSION

## Global variables are variables that can be accessed from any scope , ex - inside a funtion

## To use global variable inside a function we have to either define them as global eith the global keyword, or refer to them by using the $GLOBALS syntax.

```php
$x = 75;

function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
//=>
$x = 75;

function myfunction() {
  global $x;
  echo $x;
}

myfunction()
```

## Create a global variable from inside a function , and use it outside of the funtion.

```php
function myFunction(){
    $GLOBALS["x"] =100;
}
myFunciton();

echo $GLOBALS["x"];

echo $x;

// 100100
```

# $_SERVER =>

## $_SERVER is a php super global variable which holds informationn about headers,paths, and script locations.

-   $_SERVER['PHP_SELF'] => Returns the filname of the currently executing script
-   $_SERVER['REQUEST_METHOD'] => returns the request method used to access the page such as post.

# $_REQUEST => it is a php global variable which contains submitted form data, and all cookie data.

-   In other words, $_REQUEST is an array containing data from $_GET,$_POST, and $_COOKIE.

```php
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_REQUEST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name)){
        echo "Name is empty";
    }else{
        echo "$name";
    }
}
?>
```

## Using $_REQUEST on $_GET Requests =>

### GET request can be form submisssions as in the example above ,with the method attribute of the html <form> element set to get.

### GET requests can also be data from a query string (information added after a URL address)

```php

<a href="demo_phpfile.php?subject=PHP&web=W3schools.com">Test $GET</a>
//When a user clicks the link, the query string data is sent to demo_phpfile.php.

The PHP file demo_phpfile.php:

<html>
<body>

<?php
echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];
?>

</body>
</html>
// Study PHP at W3schools.com
```

## $_POST =>

### $_POST contains an array of variables received via the HTTP POST method.

### There are two main ways to send variables via the HTTP Post method:

- HTML forms
- JavaScript HTTP requests

```php
<html>
<body>

<form method="POST" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</body>
</html>

$name = $_POST['fname'];
echo $name;

// We have also added some extra lines for security.

<html>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fname']);
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>

```
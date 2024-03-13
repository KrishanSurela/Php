# Regular Expression =>

## A regular expression is a sequence of characters that forms a search pattern. When we search for data in a text, we can use this search pattern to describe what we are searching for.

-   A regular expression can be a single xharcter, ot a more complicated pattern.
-   Regular expressions can be used to perform all types of text search and text replace operations.

-   Notes => In php , regular expressions are strings composed of delimeters, a pattern and optional modifiers.

```php
$exp = "/w3schools/i";

```

-   In this example above. / is the delimiter , w3schools is the pattern that is being searched for, and i is a modifier that makes the search case-insensitive.

-   The delimiter can be any character that is not a letter, number, backslash or space. the most common delimiter is the forward slash(/)

## Regular Expression Functions ->

-   preg_match() => Returns 1 if the pattern was found in the string and 0 if not.

```php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // 1 or 0 ho skta hai

// 1
```

-   preg_match_all() => returns the number of times the pattern was found in the string , which may also be 0

```php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
//4
```

-   preg_replace() => Returns a new string where matched patterns have been replaced with another given string.

```php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
// Visit W3Schools!
```

## Regular Expression Modifiers =>

### Case-Insensitive (i):

-   The i modifier makes the search case-insensitive.
-   For example, /w3schools/i will match “w3schools” regardless of its case.

### Multiline (m):

-   The m modifier affects how the ^ and $ anchors work.
-   When m is used, ^ matches the beginning of each line, and $ matches the end of each line.
-   Useful when working with multiline strings.

```php

<p>How many times does the phrase "you" occur at the beginning of a line in the text:</p>

<?php
$txt = "you are better than\nyou think you";
$pattern = "/you$/m"; // dono line me se kitni baar last me you aa rha hai

$pattern1 = "/^you/m"; // dono line me se kitni baar start me you aa rha hai
echo preg_match_all($pattern, $txt); 1
?>

<p>The matches were found here:</p>

<pre>
<?php
echo preg_replace($pattern, "#", $txt);
echo preg_replace($pattern1, "#", $txt);
?>
</pre>
// # are better than
// # think

// you are better than
// you think #
<p>(Each match was replaced by a # character)</p>

</body>
</html>


```

### UTF-8 (u):

-   The u modifier enables correct matching of UTF-8 encoded patterns.
-   Useful when dealing with non-ASCII characters

## Regular Expression Patterns => Bracket are used to find a range of characters.

- [abc] => find one or many of the characters inside the brackets.
- [^abc] => find any character NOT between the brackets.
- [a-z] => find any character alphabetically between two letters.
- [A-Z] => find any character alphabetically between two upper-case letters.
- [123] => Find one or many of the digits inside the brackets
- [0-5] => Find any digits between the two numbers 
- [0-9] => find any digits 

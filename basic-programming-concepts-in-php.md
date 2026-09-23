# Basic programming concepts in PHP

## The basics - how do I add PHP to a web page?
To start with we will write PHP by embedding it in an HTML page. Here's an example:
```php
<!DOCTYPE HTML>
<html>
<head>
<title>A simple PHP page</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<h1> This is a PHP Page</h1>

<?php
echo "<p>Welcome to PHP</p>";
?>

</body>
</html>
```
This example simply prints the text *Welcome to PHP*. Here are some key points.

* *echo* is a simple print command.
* The PHP tags (```<?php``` and ```?>```) indicate that the enclosed statements are PHP and not HTML
* The page needs to be saved with a .php extension e.g. mypage.php
* All PHP statements must end with a semi-colon ( ; ) !

### How can I view my PHP web page
* Make sure the page is on a web server.
* View the page in a browser. You must request the page via the server i.e. the URL must begin with *http*.

## Variables and data types
In PHP all variables start with the dollar sign ($)
```php
<?php
$myVar = "Hello World";
echo $myVar; //outputs Hello World
?>
```
PHP is a dynamically typed language.
* We don't need to specify the type of data a variable contains
* We can change the type of data stored in a variable e.g.
```php
<?php
$myVar = 9;  //number
$myVar = true;  //boolean
$myVar = "Hiya"; //string
echo $myVar; // "Hiya"
?>
```

### Data types in PHP
There are Four simple scalar types:
* boolean (true/false)
* integer e.g. 3, 4,-3201
* float e.g. 1.42, 56.7
* string
  * Can be in single quotes e.g. 'hello world'
  * Can be in double quotes e.g. "hello world"


Three compound data types
* array, object, callable 

And two special types
* Resource (reference to an external resource e.g. database)
* NULL (A variable with no value)

### Generating output
If we use double quotes (and curly brackets around the variable) the variables in a string will be evaluated e.g.

```php
<?php
$name = "Bob";
$job = "mechanic";
echo "<p>Hi, my name is {$name}. I work as a {$job}<p>"; //<p>Hi, my name is Bob . I work as a mechanic</p>
?>
```
* If we use single quotes the variable won't be evaluated e.g.

```php
<?php
$name = "Bob";
$job = "mechanic";
echo '<p>Hi, my name is $name. I work as a $job<p>'; //<p>Hi, my name is $name. I work as a $job</p>
?>
```

If we use single quotes we can use the concatenate operator ( . ) to join the two strings

```php
<?php
$name = "Bob";
$job  = "mechanic";
echo '<p>Hi, my name is '.$name.'. I work as a '.$job; //<p>Hi, my name is Bob . I work as a mechanic</p>
?>
```

For more info see:
* http://php.net/manual/en/language.types.string.php
* https://stackoverflow.com/questions/3446216/what-is-the-difference-between-single-quoted-and-double-quoted-strings-in-php


## Conditional statements
Again, testing data in PHP works like many other programming languages e.g. a website that is only for people aged 65 and over:

```php
<?php
$age = 65;
if($age >= 65){
    echo "<p><a href='homepage.html'>Welcome to the website</a></p>";
}else{
    echo '<p>Sorry you are not old enough for the website</p>';
}
?>
```

### Comparison Operators
These are the most commonly used comparison operators

| Operator   |       Name       |       
|:--:|:-------------:|
|===|equal|
|!==|not equal|
|<|less than|
|>|greater than|
|<=|less than or equal to|
|>=|greater than or equal to|

Here are some examples:

```php
<?php
//As long as $team doesn't equal Man Utd we display the message
$team = "Huddersfield Town";
if($team !== "Man Utd"){
    echo 'Good choice';
}
?>
```

```php
<?php
//if the score is greater than 70 display the message
$score = 88;
if($score >= 70){
    echo 'You scored an A grade';
}
?>
```

### Logical Operators
| Operator   |       Name       |       
|:--:|:-------------:|
|&&|AND|
|\\|\\||OR|

Logical operators AND (&&) and OR (||) allow us to check for more than one condition at a time.

```php
<?php
//if $score is in the range 60 and 69 the message is displayed
$score = 63;
if($score >= 60 && $score < 70){
    echo 'You got a B grade';
}
?>
```

```php
<?php
//if $uName has a value of Bill or Bob the message is displayed
if($uName === "Bill" || $uName === "Bob"){
    echo "Welcome {$uName}";
}
?>
```

### Else if and switch
We can chain together lots of if statements using *else*:

```php
<?php
$score = 45;
if ($score > 100) {
    echo "I'm sorry, it's not possible to score higher than 100";
} else if ($score >= 70) {
    echo "You got an A grade";
} else if ($score > 59 && $score < 70) {
    echo "You got a B grade";
} else if ($score > 49 && $score < 60) {
    echo "You got a C grade";
} else if ($score > 39 && $score < 50) {
    echo "You got a D grade";
} else if ($score > 29 && $score < 40) {
    echo "You got an E grade";
} else if ($score < 30) {
    echo "Sorry, you've failed the assignment";
}
?>
```

A more compact approach is to use a *switch* statement:

```php
<?php
$module = "CHT2520";
switch ($module) {
    case "CFT2111":
        echo "20 credits";
        break;
    case "CHP2524":
        echo "40 credits";
        break;
    case "CHT2520":
        echo "20 credits";
        break;
}
?>

```

## Loops
These work in a similar way to many other programming languages - Java, JavaScript etc.

Here's a while loop:
```php
<?php
$counter=10;
while ($counter<20)
{
    echo "{$counter}<br>";
    $counter++;
}
?>
```
This will output the numbers 10,11,12,13,14,15,16,17,18,19

Here's a for loop:
```php
<?php
for($i=1; $i<=10; $i++){
    echo "{$i}<br>";
}
?>
```

This will output the numbers 1,2,3,4,5,6,7,8,9,10

## Arrays
* Arrays in PHP can store any type of data
* Arrays are  dynamic, we can add and remove elements as we wish.

### Creating arrays
Arrays can  be created simply by using square brackets:

```php
<?php
$nameOfArray = ['value1','value2','value3','value4'];
?>

```
Here are some specific examples:
```php
<?php
$shopping = array("tea", "bread", "milk", "sugar");
$testScores = array(34, 32, 21, 8, 56, 45);
$countries = ['England', 'Scotland', 'Wales', 'N.Ireland'];
?>
```

### Debugging arrays
Often we want to know the contents of an array but we can't just echo an array e.g.

```php
<?php
$testScores = array(34, 32, 21, 8, 56, 45); //
echo $testScores; //Error - Notice: Array to string conversion
?>
```

The *print_r()* function is really useful when debugging arrays (*var_dump()* is also useful).

```php
<?php
$shopping = ["tea","bread","milk","sugar"];
print_r($shopping); //Array ( [0] => tea [1] => bread [2] => milk [3] => sugar )
?>
```

### Working with arrays
We can think of the array as being a list of data
* Each item (element) in the list has a number
* The numbering starts at zero
* The number is known as the index number

```php
<?php
$shopping = ["tea","bread","milk","sugar"];
?>
```

| Index no.   |       value       |
|:--:|:-------------:|
|0|"tea"|
|1|"bread"|
|2|"milk"|
|3|"sugar"|

To access a specific element we write the name of the array and the index number in square brackets
```php
<?php
echo $shopping[2]; //milk
?>
```
We can add new items by specifying an index number
```php
<?php
$shopping[5] = "butter"; //adds a new item
?>
```
If we don't specify an index the new data is simply added to the end of the array
```php
<?php
$shopping[] = "biscuits"; //add a new item
?>
```
We can display elements in an array using their index numbers.

```php
<?php
echo "Do you like {$shopping[2]} in your {$shopping[0]}?"; // do you like milk in your tea
?>
```

## Arrays and loops
Often a loop is used to efficiently display the contents of an array

```php
<?php
$shopping = ["tea","bread","milk","sugar"];

for($i=0;$i<count($shopping);$i++){
    echo "{$shopping[$i]}<br>"; //outputs tea bread milk sugar with each cycle of the loop
}
?>
```
* The *count()* function is used to count the number of items in the array. There is a better way.....

### The foreach loop
```php
<?php
$shopping = ["tea","bread","milk","sugar"];

foreach($shopping as $shopItem)
{
    echo "<p>{$shopItem}</p>"; //outputs tea bread milk sugar each on a separate line
}
?>
```
The *foreach* loop provides an easy way to loop over the contents of an array.

### Associative arrays
Associative array elements aren't numbered, instead they are labelled. The label is known as a key.

To create an associative array:

```php
<?php
$nameOfArray = ["key1"=>"value1", "key2"=>"value2", "key3"=>"value3"];
?>
```
Here's a specific example:
```php
<?php
$film = ["title"=>"Jaws", "year"=>"1975", "duration"=>124];
?>
```

| Key   |       Value       |
|:--:|:-------------:|
|"title"|"Jaws"|
|"year"|"1975"|
|"duration"|"124"|

We access elements using the key instead of an index number.
```php
<?php
$film = ["title"=>"Jaws", "year"=>"1975", "duration"=>124];
echo "<p>The film {$film['title']} was released in {$film['year']}</p>"; // outputs The film Jaws was released in 1975
$film["certificate"] = "15"; // adds a new certificate element
?>
```

### Multi-dimensional arrays
* Arrays can store many different data types, including other arrays
```php
<?php
$countries = [
    ["name"=>"Germany", "capital"=>"Berlin", "population"=>81000000],
    ["name"=>"France", "capital"=>"Paris", "population"=>66000000],
    ["name"=>"Italy", "capital"=>"Rome", "population"=>60000000]
];
echo $countries[1]["population"]; //outputs  66000000
?>
```

We can use a loop to output the values:

```php
<?php
foreach($countries as $country){
    echo "<p>{$country['name']} has a population of {$country['population']}</p>";
}
?>
```
This would output:

```
Germany has a population of 81000000
France has a population of 66000000
Italy has a population of 60000000
```

### Outputting as a table
We can output the data as an HTML table (or any other HTML structure):
```php
<?php
echo "<table>";
echo "<tr><th>Name</th><th>Population</th></tr>";
foreach($countries as $country)
{

    echo "<tr>";
    echo "<td>{$country['name']}</td>";
    echo "<td>{$country['population']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
```
We would get something like the following (if we add some CSS)

| Name   |       Population       |
|:--:|:-------------:|
|Germany|81000000|
|France|66000000|
|Italy|60000000|

### Databases and associative arrays
The above example of multi-dimensional arrays is an important one to understand. When we retrieve data from a database using PHP, we will receive this data in the form of a multi-dimensional array, with data from each row of the database table stored as a separate associative array.

### Array functions
There are lots of functions that can help us work with arrays e.g. are some examples:
* *count()* Tells us the number of items in an array
* *in_array()* Tells us if a value exists in an array
* *array_unshift()* Inserts items at the start of an array
* *sort()* Sorts an array alphabetically or numerically

Look at the recommended reading or php.net for more info. Here are some examples

The function *in_array()* tells us whether an item can be found in an array

```php
<?php
$shopping = array("tea","bread","milk","sugar");
if(in_array("bread", $shopping))
{
    echo "There's bread on the shopping list";
}
?>
```

The function *array_push()* adds an item to an array

```php
<?php
$countries = [
    ["name"=>"Germany", "capital"=>"Berlin", "population"=>81000000],
    ["name"=>"France", "capital"=>"Paris", "population"=>66000000],
    ["name"=>"Italy", "capital"=>"Rome", "population"=>60000000]
];

$countriesVisited = [];
foreach($countries as $country)
{
    if($country["name"]==="France" || $country["name"]==="Italy")
    {
        array_push($countriesVisited,$country["name"]);
    }
}
print_r($countriesVisited); //Array ( [0] => France [1] => Italy )
?>
```

## PHP strings
PHP strings work a bit like arrays, starting at zero each character in the string is numbered:

```php
<?php
$modStr = "CHT2520 Advanced Web Programming";
echo "<p>The first character is {$modStr[0]}</p>"; //The first character is C
echo "<p>The tenth character is {$modStr[9]}</p>"; //The tenth character is e
?>
```
PHP features lots of useful string functions. Again see php.net for complete info. Here are some examples:
* *strlen()* Tells us the number of characters in a string
* *str_word_count()* Tells us the number of words in a string
* *substr()* Cuts out part of a string
* *strpos()* Finds the position of a word within a string
* *trim()* Removes whitespace from the ends of a string

This example use the *str_replace()* function to search through a string and then replace part of it.

```php
<?php
$modStr = "CHT2520";
$msg = "CHP2524 is my favourite module";
echo "<p>{$msg}</p>"; //CHP2524 is my favourite module
$msg = str_replace("CHP2524",$modStr,$msg);
echo "<p>{$msg}</p>"; //CHT2520 is my favourite module
?>
```

## Functions

A function is simply group of statements that we give a name to. Here's an example:

```php
function display_details():void{
    echo "<ul>";
    echo "<li>Jane Jones</li>";
    echo "<li>19</li>";
    echo "<li>IT</li>";
    echo "</ul>";
}

```

The function name should always describe what the function does e.g. this function, _display_details_, prints someone's details.

### Calling a function

To run the code in a function we write the name of the function followed by parentheses(curved brackets).

```php
function display_details():void{
    echo "<ul>";
    echo "<li>Jane Jones</li>";
    echo "<li>19</li>";
    echo "<li>IT</li>";
    echo "</ul>";
}
display_details(); //this line of code calls the function
```

This would output

```html
<ul>
  <li>Jane Jones</li>
  <li>19</li>
  <li>IT</li>
</ul>
```

### Arguments and parameters

We can pass data to a function, we do this using an argument. 

```php
function display_details(string $name):void{
    echo "<ul>";
    echo "<li>$name</li>";
    echo "<li>19</li>";
    echo "<li>IT</li>";
    echo "</ul>";
}

display_details("Sarah Smith");
```

Outputs:

```html
<ul>
  <li>Sarah Smith</li>
  <li>19</li>
  <li>IT</li>
</ul>
```

When the function is called, the text 'Sarah Smith' (the argument) is assigned to the variable _$name_ (the parameter).
Arguments allow us to customise a function. The function can produce a different output each time we call it.

```php
function display_details(string $name):void{
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>19</li>";
    echo "<li>IT</li>";
    echo "</ul>";
}

display_details("Sarah Smith");
display_details("Sadiah Iqbal");
display_details("Ania Kowalski");

```

Outputs:

```html
<ul>
  <li>Sarah Smith</li>
  <li>19</li>
  <li>IT</li>
</ul>

<ul>
  <li>Sadiah Iqbal</li>
  <li>19</li>
  <li>IT</li>
</ul>

<ul>
  <li>Ania Kowalski</li>
  <li>19</li>
  <li>IT</li>
</ul>
```

#### Multiple arguments

We can use several arguments. We separate the arguments and parameters with commas.

```php
function display_details(string $name, int $age, string $course):void{
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>{$age}</li>";
    echo "<li>{$course}</li>";
    echo "</ul>";
}
display_details("Sarah Smith", 21, "Computing");

```

Outputs:

```html
<ul>
  <li>Sarah Smith</li>
  <li>21</li>
  <li>Computing</li>
</ul>
```

#### Optional arguments

We can make arguments optional by providing a default value for the parameter. In this example _$course_ is given a default value of "IT".

Optional parameters must come after required parameters.

```php
function display_details(string $name, int $age, string $course="IT"):void {
    echo "<ul>";
    echo "<li>{$name}</li>";
    echo "<li>{$age}</li>";
    echo "<li>{$course}</li>";
    echo "</ul>";
}
display_details("Bill Brown", 21, "Computing");
display_details("Sarah Smith", 27);
```

In the second function call, a third argument isn't specified so it defaults to _IT_.

```html
<ul>
  <li>Bill Brown</li>
  <li>21</li>
  <li>Computing</li>
</ul>

<ul>
  <li>Sarah Smith</li>
  <li>27</li>
  <li>IT</li>
</ul>
```

### Arrays as arguments
We can pass any type of variable as an argument. This example uses an array.

```php
function printArrayAsList(array $arr):void
{
    echo "<ul>";
    foreach($arr as $item){
        echo "<li>";
        echo $item;
        echo "</li>";
    }
    echo "</ul>";
}
printArrayAsList( ["Sarah", "Sadia", "Ania", "Bill"] );
```

Outputs:

```html
<ul>
  <li>Sarah</li>
  <li>Sadia</li>
  <li>Ania</li>
  <li>Bill</li>
</ul>
```

### Returning values

As well accepting 'input' via parameters, functions can also produce 'output'. They can send data back using a _return_ statement. The return statement sends a value back to the point in the script the function was called from. In this example, a value of 8 is returned and assigned to the variable `$numDoubled`.

```php
function doubleIt(int $num):int
{
    $double=$num*2;
    return $double;
}
$num = 4;
$numDoubled = doubleIt($num);
echo "{$num} doubled is {$numDoubled}"; //4 doubled is 8
```

- The function declaration (the first line of the function) can specify the type of data that is returned. In this case an integer is returned so we specify `:int`.
- If a function doesn't return a value, we specify `:void`. See the previous examples.

In this next example the return is used in an _if_ statement.

```php
function old_enough(int $age):bool
{
        if($age >= 17){
            return true;
        }else{
            return false;
        }
}
$age=21;
if(old_enough($age)){
        echo "You're old enough to drive";
}
```

Here's another example that tells us if a file is an image.

```php
function isImage(string $filename):bool
{
    $fileExt = substr($filename, strrpos($filename, '.') + 1); //gets the filename extension from the string e.g. png
    if($fileExt==="png" || $fileExt==="jpg" || $fileExt==="jpeg"){
        return true;
    }
    return false;
}

var_dump(isImage("test.png")); //true
var_dump(isImage("somefile.jpeg")); //true
var_dump(isImage("anotherfile.php")); //false
var_dump(isImage("anyfile.jpg")); //true

```

Returning values is often a better idea than running `echo` statements from within a function. It allows the function to be used more flexibly. Here's the example from earlier re-written using a _return_ statement.

```php
function hasPassed(int $mark):bool
{
    if($mark>=40){
        return true;
    }else{
        return false;
    }
}
if(hasPassed(45)){
    echo "Well done";
}else{
    echo "Hard luck";
}
```

### Returning arrays

We can return any type of data we want. This example returns an array.

```php
function searchCountriesByContinent(string $searchTerm):array
{
    $countries = [
      ["name"=>"Germany", "capital"=>"Berlin", "continent"=>"Europe"],
      ["name"=>"France", "capital"=>"Paris", "continent"=>"Europe"],
      ["name"=>"Japan", "capital"=>"Tokyo", "continent"=>"Asia"],
      ["name"=>"Italy", "capital"=>"Rome", "continent"=>"Europe"]
    ];
    $matches = [];
    foreach($countries as $country){
        if($country["continent"] === $searchTerm){
            $matches[] = $country;
        }
    }
    return $matches;
}
$matchingCountries = searchCountriesByContinent("Europe");

foreach($matchingCountries as $country){
    echo "<p>{$country["name"]}</p>";
}

```

### Variable scope

Variables declared inside a function are only available to that function

```php
function getName():void{
    $name = "Fred";
    echo $name;
}

getName(); //outputs Fred
echo $name; //causes an error : undefined variable
```

- By default variables declared outside a function aren't available to the function
- We need to declare the variable as _global_ for the function to recognise it

```php
$name="Mike";
function tellMeStuff():void{
    global $name; //need to declare as global to access the existing $name variable
    echo $name; //outputs Mike
}
tellMeStuff();
```
- Global variables are often considered bad programming practice as they tie the function to only being used in the presence of the global variables
- Ideally, functions should work independently. They can then be used in any application without changing the code (the principle of 'Loose coupling')



## More info
* http://php.net/
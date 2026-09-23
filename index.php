<!DOCTYPE HTML>
<html>

<head>
    <title>Introduction to PHP</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php
require("functions.php");

echo "<h1>Welcome to PHP</h1>";


// 1.
// a) View the page in a browser. Make sure you can see the welcome message.
// b) Modify the message so that it appears as a <h1> heading.
// c) Not a PHP question, but can you link a style sheet to this page and change the background colour of the page and the font.


// 2. Uncomment the following three PHP variables.
// a) Using these variables and a PHP echo statement output the message 'Hi Fred. Your favourite colour is red. Your favourite website is http://www.hud.ac.uk.'
// b) Use HTML <em> tags to italicise the word Fred.
// c) Use an HTML anchor element to make the text http://www.hud.ac.uk into an actual hyperlink that links to the University homepage. Again, this should all be done using a PHP echo statement.


$name = "Fred";
$colour = "red";
$url="http://www.hud.ac.uk";

//a
echo "<p>Hi {$name}. Your favourite colour is {$colour}. Your favourite website is {$url}.</p>";
//b
echo "<p>Hi <em>{$name}</em>. Your favourite colour is {$colour}. Your favourite website is {$url}.</p>";
//c
echo "<p>Hi <em>{$name}</em>. Your favourite colour is {$colour}. Your favourite website is <a href='{$url}'>{$url}</a>.</p>";

// 3. Uncomment following two PHP variables.
// a) Create a third variable, name it $total. $total should be assigned a value that is the sum of $num1 and $num2. Using these variables and a PHP echo, output the value of $total e.g. '10 + 20 = 30'
// b) Create another variable, call it $average. $average should be assigned a value that is the mean average of $num1 and $num2. Again, use a PHP echo statement to output the value of $average.


$num1=10;
$num2=20;

$total = $num1 + $num2;
echo "<p>{$num1}+{$num2}={$total}</p>";
$average = $total / 2;
echo "<p>The average is {$average}.</p>";


// 4. Uncomment following three PHP variables.
// The variables $assign1 and $assign2 store the marks out of 100 for a student for two different assignments. Assignment 1 has a weighting of 40%, Assignment 2 has a weighting of 60%. Create another PHP variable called $overall. Using PHP mathematical operators, calculate an overall mark for the student and assign this value to the variable $overall. Use an echo statement to print this mark into the HTML page.


$assign1 = 56;
$assign2 = 78;

$overall = $assign1*0.4+$assign2*0.6;

echo "<p>The overall mark is {$overall}.</p>";

// 5.
// a) In order to pass a module students must get an overall mark that is greater than or equal to 40. Write a PHP if statement that will test if $overall is greater than or equal to 40. If it is, use an echo statement to output "passed". If it isn't use an echo statement to output "failed"
// b) Write another if statement. This time it should test the value of $overall and output if the student has an A, B, C, D etc.

if($overall >= 40){
	echo "<p>Passed</p>";
}else{
	echo "<p>Failed</p>";
}

if ($overall>100) {
    echo "<p>I'm sorry, it's not possible to score higher than 100</p>";
} else if ($overall>=70) {
    echo "<p>You got an A grade</p>";
} else if ($overall>59 && $overall<70) {
    echo "<p>You got a B grade</p>";
} else if ($overall>49 && $overall<60) {
    echo "<p>You got a C grade</p>";
} else if ($overall>39 && $overall<50) {
    echo "<p>You got a D grade</p>";
} else if ($overall>29 && $overall<40) {
    echo "<p>You got an E grade</p>";
} else if ($overall<30) {
    echo "<p>Sorry, you've failed the assignment</p>";
}



// 6.
// The Kaboom Gas company charge their customers for gas as follows:
// Units of Gas Used Cost(£)
// Units of Gas:0 to 500 Cost:£10
// Units of Gas:501 to 1000 Cost:£10 + 5p for each unit over 500
// Units of Gas:Over 1000 Cost:£35 + 3p for each unit over 1000
// The following PHP code assigns a random number value to the variable $units. Uncomment the code and write some additional PHP code that will calculate and output the cost of a gas bill based on the value of $units.


$units = rand(0,2000);
echo "<p>Units has a value of {$units}.</p>";

$cost;
if($units >0 && $units <= 500){
	$cost = 10;
}else if($units >500 && $units <= 1000){
	$cost = 10 + ($units-500) * 0.05;
}else{
	$cost = 35 + ($units-1000) * 0.03;
}

echo "<p>{$units} units costs £{$cost}.</p>";



// 7. Arrays
// a) Output the entire contents of the $countries array using a var_dump() or print_r() statement.
// b) Using this array, write a single echo statement that outputs 'USA is in North America'.
// c) Using this array, write a single echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'.
// d) Output the entire contents of the array as an HTML list using a foreach loop.
// e) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net.
// http://php.net/manual/en/function.array-merge.php. Output the joined array using a var_dump() or print_r() statement.
// f) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.

$countries = ["China", "India", "USA", "Indonesia", "Brazil", "Pakistan"];

$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];

var_dump($countries);
echo "<p>{$countries[0]}, {$countries[1]}, {$countries[3]} and {$countries[5]} are all in Asia</p>";
foreach($countries as $country)
{
	echo "{$country}<br>";
}
$mergedArr = array_merge($countries, $moreCountries);
var_dump($mergedArr);
rsort($mergedArr);
echo "<ul>";
foreach($mergedArr as $country)
{
	echo "<li>{$country}</li>";
}
echo "</ul>";


// 8. Associative Arrays
// a) Using the $films array, write an echo statement that outputs 'Spirited Away was released in 2001'
// b) Add another film to the array, using an echo statement, output some of new the film's details
// c) Using a foreach loop display the details for all the films
// d) Output the data from (c) using an HTML table.


$films = [
    ["title" => "Jaws", "year" => "1975", "duration" => 124, "certificate" => "15"],
    ["title" => "Spirited Away", "year" => "2001", "duration" => 124, "certificate" => "PG"],
    ["title" => "Winter's Bone", "year" => "2010", "duration" => 100, "certificate" => "15"],
];


$films=[
    ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
    ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
    ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"],
    ["title"=>"Do The Right Thing", "year"=>"1989", "duration"=>120,"certificate"=>"15"]
];

echo "<p>{$films[1]["title"]} was released in {$films[1]["year"]}</p>";
echo "<p>{$films[3]["title"]} is {$films[3]["duration"]} minutes long.</p>";
echo "<table>";
echo "<tr><th>Title</th><th>Year</th><tr>";
foreach($films as $film)
{
	echo "<tr><td>{$film["title"]}</td><td>{$film["year"]}</td></tr>";
}
echo "</table>";

// 9. Strings
// a) Using the following string, write an echo statement that outputs the fifth character in the string
// b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
// c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
// d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'


$moduleStr = "CHT2520 Advanced Web Programming";

echo "<p>{$moduleStr[4]}</p>";
$length = strlen($moduleStr);
echo "<p>String length = {$length}</p>";
$lowerCase = strtolower($moduleStr);
echo "<p>{$lowerCase}</p>";
$substring = substr($moduleStr,17,3);
echo "<p>{$substring}</p>";


// 10. Have a look in the functions.php file. The function printDetails() prints details about a film.
// a) Write a line of code in this file (index.php) that will call the printDetails() function
// b) Make several function calls to output details of different films.
// c) Modify the function so that you can pass a third argument that specifies the duration of the film.


printDetails("Jaws",1975);
printDetails("Back to the Future",1985);
printDetails("Inception",2010);

printDetails("Do The Right Thing", 1989, 120);

// 11. The function convertToEuros() converts a value in pounds into euros.
// a) Write a line of code that will call this function. Test it works by outputting the result using an echo statement.

$euros = convertToEuros(100);
echo "<p> £100 pounds in euros is €{$euros}.</p>";

// 12. Look at the getPositiveNumbers() function. It accepts an array of numbers and returns only those numbers that are greater than zero.
// a) Write a line of code that will call this function. Use a foreach loop output the elements of the returned array.

$posNumbers = getPositiveNumbers([34,0,-31,4]);
foreach($posNumbers as $num){
    echo "<p>{$num}</p>"; // 34, 4
}

// 13. Look at the filterImageFileNames() function. It accepts an array of filenames and returns only those filenames that have a png, jpg or jpeg extension.
// a) Write a line of code that will call this function. Using a foreach loop output the elements of the returned array.

$filenames = ["report.docx","logo.png","cat.jpeg","plan.pdf","btn.jpg"];
$matchingFiles = filterImageFileNames($filenames);
foreach($matchingFiles as $filename){
    echo "<p>{$filename}</p>";
}

// 14. In functions.php Write a calcAverage() function. 
// It should accept an array of numbers as input and return the average of all the numbers in the array. 
// Here's some example code that calls a calcAverage() function. Uncomment this code code to check your function works.

$scores = [20,13,4,23,65];
$avg = calcAverage($scores);
echo "<p>The average score was {$avg}</p>";  //outputs ' The average score was 25'
?>
</body>

</html>
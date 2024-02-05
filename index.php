<?php
// echo"This is php developer.";
// echo "<br>";
// // in php keywords are not case sensitive ***************
// // variable are created with $ sign
// $name ="ali";
// echo $name;
// echo "<br>";
// // var_dump function is used to get datatype and value of a variable. *********
// var_dump($name);
// echo "<br>";

// // multiple assignment of variables************
// $a = $b = $c = 2;
// echo $a;
// echo "<br>";
// echo $b;
// echo "<br>";
// echo $c;
// echo "<br>";
// // global scope *******************
// // a global function cannot be accessed within a function 
// // a local variable cannot be accessed outside the function ****
// $x = 12;
// $y = 5;
// function number(){
//     // use global keyword to access global variable.***********
//     global $x;
//     echo"<p> x is equal to $x </p>";
//     echo "<br>";
//     // php stores all global variables in an array called GLOBALS['variablename']********
//     $GLOBALS['x'] = $GLOBALS['y'] + $GLOBALS['x'];
//     echo $x;
//     echo "<br>";
// }
// number();
// // when a function is completed all of its variables are deleted 
// // static keyword is used when we want to keep the variable.**********
// function checker(){
//     static $value = 0;
//     echo $value;
//     $value++;
// }
// checker();
// echo "<br>";
// checker();
// echo "<br>";
// checker();
// echo "<br>";
// // echo and print both are used to print in php **************
// // echo is faster and can take multiple parameter it has no return type
// // print has return type 1 and takes 1 argument 
// // string length***********
// echo strlen("this is string length");
// echo "<br>";
// // string word count ***********
// echo str_word_count("ahmed ali ");
// echo "<br>";
// echo strpos("Hello world!", "world");
// string to uppercase**********
$name = "ali";
echo strtoupper($name);
?>
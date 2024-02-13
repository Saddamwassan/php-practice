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
// String methods **************************
// string to uppercase**********
// $name = "ali";
// echo strtoupper($name);
// echo "<br>";
// // lowercase 
// echo strtolower($name);
// echo "<br>";
// // replace 
// echo str_replace("ali","Mohammad",$name);
// echo "<br>";
// // reverse
// echo strrev("This is php.");
// echo "<br>";
// // remove whitespaces 
// echo trim($name);
// // convert string into an array 
// // $sentence = "This is news";
// // $sentarray = explode(" ",$sentence);
// // print_r($sentarray); // print_r function is used to print an array.
// // slicing in string ***********
// $name = "Ali Ahmed";
// echo substr($name,4,8);
// echo "<br>";
// // start slice from 4 to end.
// echo substr($name,4);
// // reverse slice 
// echo substr($name, -5, 2);
// // negative length
// echo substr($name, 5, -2);
// // concatenation by .
// $a = "Shahmir";
// $b = "good";
// $c = "$a" . " is a " .$b. " student";
// echo "<br>";
// echo $c;
// // escape \ characters ***************
// echo "hi this is \"escape\" character";
// \'	Single Quote	
// \"	Double Quote	
// \$	PHP variables	
// \n	New Line	
// \r	Carriage Return	
// \t	Tab	
// \f	Form Feed	
// \ooo	Octal value	
// \xhh
// php numbers ****************
// $num = 22331;
// $num1 = 2.33;
// var_dump(is_int($num));
// echo "<br>";
// var_dump(is_float($num));
// echo "<br>";
// var_dump(is_int($num));
// // is_finite
// // is_infinite
// // is_numeric
// // is_numeric *****************
// $x = 5985;
// var_dump(is_numeric($x));
// echo "<br>";
// $x = "5985";
// var_dump(is_numeric($x));
// echo "<br>";
// $x = "59.85" + 100;
// var_dump(is_numeric($x));
// echo "<br>";
// $x = "Hello";
// var_dump(is_numeric($x));
// // casting *****************
// // float to int 
// $a = 3.22;
// $b = (int)$a;
// var_dump($b);
// echo "<br>";
// // echo $b;
// // string to float 
// $x = "233.22";
// $y = (float)$x;
// var_dump($y);
// $a = 1011;
// $b = 11.222;
// $c = false;
// $d = true;
// $e = NULL;
// $f = "let's do it";
// // casted
// $x = (string)$a;
// $y = (string)$b;
// $z = (string)$c;
// $w = (string)$d;
// $u = (string)$e;
// $v = (string)$f;
// var_dump($x);
// echo "<br>";
// var_dump($y);
// echo "<br>";
// var_dump($z);
// echo "<br>";
// var_dump($w);
// echo "<br>";
// var_dump($u);
// echo "<br>";
// var_dump($v);
// // cast to bool ******************
// // If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.
// // casting to array**********
// // casting to object *********
// // array to object 
// // object to array 
// // to null unset is used its deprecated
// // Math function in php ***************** 
// // pi 
// echo pi();
// echo "<br>";
// // min  
// echo min(-12,-3,4,5,6,7,8);
// echo "<br>";
// // max 
// echo max(1,2,33,11,100,212);
// echo "<br>";
// // absolute value ******returns +ve value.
// echo abs(-1.2);
// echo "<br>";
// // square root 
// echo sqrt(211);
// echo "<br>";
// // round off
// // if 0.5 it makes 1 if 0.4 it makes 0
// echo round(0.4);
// echo "<br>";
// echo round(0.49);
// echo "<br>";
// echo round(0.5);
// // floor 
// $a = 3.33;
// echo floor($a);
// // ceil
// echo "<br>";
// echo ceil($a);
// // random value*************
// echo "<br>";
// echo rand();
// echo "<br>";
// // to set min and max for random
// echo rand(20,50)
// CONSTANT *****************************
// no $ sign for contant variable 
// define(name,value,case-insensitive) php does not support case-insensitive anymore.
// Constants are global they can be accessed inside a function.
// define("boy","Ali");
// echo boy;
// // const can be used to constant as well.*********
// const value = 2000;
// echo "<br>";
// echo value;
// echo "<br>";
// $value = 3000;
// echo value;
// const str = "Ahmed";
// echo str;
// we cannot use const inside another block, function or if ****
// function name(){
//     // const student = "Usama";
//     echo $student;
// }
// name();
// // constant array ***********
// echo "<br>";
// define("laptops",["latitude 5289","hp elite-book","fujitsu note-book"]);
// echo laptops[2],laptops[0];
// // Array*************
// // index_Array
// $companies = ["Microsoft","google","Apple"];
// print_r($companies);
// echo "<br>";    
// // second way 
// $more_companies = array("Amazon","Twitter","Facebook");
// print_r($more_companies);
// echo "<br>";    
// // to rewrite a value in array.
// $companies[2] = "Facebook";
// print_r($companies);
// $companies[] = 30;
// echo "<br>";    
// print_r($companies);
// // array merge ***********
// $companies_together = array_merge($companies,$more_companies);
// echo "<br>";    
// print_r($companies_together);
// // Associative array **************
// $students_detail = ["name"=>"Ahmed","class"=>"9th","field"=>"Software_Eng"];
// print_r($students_detail);
// // Multidimentional array ***************
// $multiArray = [
//     ["Ali","Saqib","Faseeh",22],
//     ["SaqibShah","Lala","Faseeh",22],
//     ["JIbran","Saqib","Mohsin",22],
// ];
// print_r($multiArray);
// // multi associative 
// $multiAssociative = [
//     ["name"=>"Ali","class"=>"PhpDev","age"=>21],
//     ["name"=>"Saqib","class"=>"AndroidDev","age"=>20],
//     ["name"=>"Faseeh","class"=>"JsDev","age"=>23],
// ];
// print_r($multiAssociative);
// $developers = ["Saqib","Farhan","AhsanMughal","MohsinMughal"];
// // for loop ************
// for($i=0; $i<count($developers); $i++){
//     echo $developers[$i]."<br>";
// }
// // foreach loop *******
// foreach($developers as $x){
//     echo $x."<br>";
// }
// foreach loop *********
// $places = ["karachi","hyd","islamabad","mirpurkhas"];
// print_r($places);
// // in for each loop main array remain same all the changes happen of items.
// // but & makes changes to main array.
// foreach($places as &$p){
//     if($p == "islamabad") $p = "Quetta";
//     echo "<br>";
// }
// print_r($places);
// $products = [
//     ["name"=>"Shoe","price"=>1200],
//     ["name"=>"Shirt","price"=>2200],
//     ["name"=>"Jacket","price"=>3000]
// ];
    // foreach($products as $pro){
    //     echo "{$pro["name"]} - $ {$pro["price"]}<br>";

    // }
    // // while loop***************
    // $i = 0;
    // while($i<count($products)){
    //     echo $products[$i]["name"];
    //     echo"<br>";
    //     $i++;
    // }
    // comparison operators 
    // echo "ali">"Ali";
    // echo "ali"=="ali";
    // echo "2"== 2;
    // 13/2/2024**************
    // array functions 
// array_column ****************
// $data = [
//             [
//             "id"        =>  2131,
//             "f_name"    =>  "Ali",
//             "l-name"    =>  "Ahmed"
//             ],
//             [
//                 "id"        =>  2131,
//                 "f_name"    =>  "Saqi",
//                 "l-name"    =>  "Ahmed"
//             ],
//             [
//                 "id"        =>  2131,
//                 "f_name"    =>  "Shahmir",
//                 "l-name"    =>  "Ahmed"
//             ]

//             ];
    
//             $f_names = array_column($data,"f_name");
//             print_r($f_names);
//     //    array_combine  creates new array after combining two arrays.****
// //    echo "<br>";
//     $fname=array("Peter","Ben","Joe");
// //     $age=array("35","37","43");
// //     $c=array_combine($fname,$age);
// //     print_r($c);
//    echo "<br>";
// //    add multiple items in array ********
// array_push($fname,"Ahsan","Arsalan","Hazik");
// print_r($fname);
// echo "<br>";
// // remove items from array ********
// array_splice($fname,1,1);
// print_r($fname);

// goto label 
echo "this is goto ";
echo "<br>";
echo "it skips the code and reaches targeted code";
echo "<br>";
goto skip;
echo "it skips the code and reaches targeted code";
echo "it skips the code and reaches targeted code";
skip: 
echo "<br>";
echo "it skipped two lines";
echo "<br>";
// recursive function *******************
function numbers($value){
    if($value <= 10){
        echo $value."<br>";
        numbers($value+1);
    }
}
numbers(1);
?>
 
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


// Palindromes only (using reference)

$numbers_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];

function generate_polindromes(&$array){
    foreach($array as $key => $number){
        // print "pirmas skaicius: $number <br>";
        $reverse_number = number_format(strrev(strval($number)));
        // print "atvirkscias skaicius: $reverse_number <br>";
        if($number != $reverse_number){
            unset($array[$key]);
        }
    }
    return $array;
}

generate_polindromes($numbers_array);
var_dump($numbers_array);

// Alternating caps (using reference)

$stringas =  'mano batai buvo trys viens pasislepe gaidys' ;

function to_capital_letters(&$string){
    for($x = 0; $x < strlen($string); $x = $x + 2){
        if($string[$x] != ''){
            $string[$x] = strtoupper($string[$x]);
        }   
    }
    print $string . "<br>";
}
to_capital_letters($stringas);


// Sort descending (using reference)

$high_num = rand(10000, 10000000);

function descending_numbers(&$integer){
    print 'Random skaicius ' . $integer . "<br>";
    $integer = strval($integer);
    for ($x = 0; $x < strlen($integer); $x++){
        $data[] = $integer[$x];
    }
    rsort($data);
    var_dump($data);
    $reverse = null;
    for ($x = 0; $x < count($data); $x++){
        $reverse .= $data[$x];
    }
    var_dump($reverse);
    $integer = intval($reverse);
    var_dump($integer);
}
descending_numbers($high_num);


// Sum of missing numbers

$numbers = [1, 3, 5, 7, 10];
$numbers2 = [10, 20, 30, 40, 50, 60];

function counting_sum($array){
    $sum = 0;
    $end_of_array = count($array) - 1;
    $counter = 0;

    for($x = $array[0]; $x <= $array[$end_of_array]; $x++){
        if ($x != $array[$counter]){
            $sum += $x; 
        } else {
            $counter++; 
        }
    }
    var_dump($sum);
}
counting_sum($numbers);
counting_sum($numbers2);

// Multiply string characters

$text = 'labas';
$no = 4;
function multiply_string_characters($string, $number){
    $result = '';
    for ($x = 0; $x < strlen($string); $x++){
        for ($i = 0; $i < $number; $i++){
            $result .= $string[$x];
        }
    }
    var_dump($result);
}
multiply_string_characters($text, $no);

// Palindrome strings (using reference)

$strings_array = ['smaukst', 'abba', 'gorgonzola', 'sedek uzu kedes'];

function polindrome_string(&$array){
    var_dump($array);
    foreach($array as $key => $value){
        $reverse_string = strrev($value);
        if($value != $reverse_string){
            unset($array[$key]);
        }
    }
    return $array;
}
polindrome_string($strings_array);
var_dump($strings_array);




?>










<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');


// // Palindromes only (using reference)

// $numbers_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];

// function generate_polindromes(&$array){
//     foreach($array as $key => $number){
//         // print "pirmas skaicius: $number <br>";
//         $reverse_number = number_format(strrev(strval($number)));
//         // print "atvirkscias skaicius: $reverse_number <br>";
//         if($number != $reverse_number){
//             unset($array[$key]);
//         }
//     }
//     return $array;
// }

// generate_polindromes($numbers_array);
// var_dump($numbers_array);

// // Alternating caps (using reference)

// $stringas =  'mano batai buvo trys viens pasislepe gaidys' ;

// function to_capital_letters(&$string){
//     for($x = 0; $x < strlen($string); $x = $x + 2){
//         if($string[$x] != ''){
//             $string[$x] = strtoupper($string[$x]);
//         }   
//     }
//     print $string . "<br>";
// }
// to_capital_letters($stringas);


// // Sort descending (using reference)

// $high_num = rand(10000, 10000000);

// function descending_numbers(&$integer){
//     print 'Random skaicius ' . $integer . "<br>";
//     $integer = strval($integer);
//     for ($x = 0; $x < strlen($integer); $x++){
//         $data[] = $integer[$x];
//     }
//     rsort($data);
//     var_dump($data);
//     $reverse = null;
//     for ($x = 0; $x < count($data); $x++){
//         $reverse .= $data[$x];
//     }
//     var_dump($reverse);
//     $integer = intval($reverse);
//     var_dump($integer);
// }
// descending_numbers($high_num);


// // Sum of missing numbers

// $numbers = [1, 3, 5, 7, 10];
// $numbers2 = [10, 20, 30, 40, 50, 60];

// function counting_sum($array){
//     $sum = 0;
//     $end_of_array = count($array) - 1;
//     $counter = 0;

//     for($x = $array[0]; $x <= $array[$end_of_array]; $x++){
//         if ($x != $array[$counter]){
//             $sum += $x; 
//         } else {
//             $counter++; 
//         }
//     }
//     var_dump($sum);
// }
// counting_sum($numbers);
// counting_sum($numbers2);

// // Multiply string characters

// $text = 'labas';
// $no = 4;
// function multiply_string_characters($string, $number){
//     $result = '';
//     for ($x = 0; $x < strlen($string); $x++){
//         for ($i = 0; $i < $number; $i++){
//             $result .= $string[$x];
//         }
//     }
//     var_dump($result);
// }
// multiply_string_characters($text, $no);

// // Palindrome strings (using reference)

// $strings_array = ['smaukst', 'abba', 'gorgonzola', 'sedek uzu kedes'];

// function polindrome_string(&$array){
//     var_dump($array);
//     foreach($array as $key => $value){
//         $reverse_string = strrev($value);
//         if($value != $reverse_string){
//             unset($array[$key]);
//         }
//     }
//     return $array;
// }
// polindrome_string($strings_array);
// var_dump($strings_array);

require('./functions.php');
// function generateFormData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formos</title>
</head>
<body>
    
<h2>Parašykite mums žinutę</h2>

<form action="" method='POST' autocomplete="off">

    <div class="input-group">
        <input type="text" name="name" id="name" value="" placeholder="Jūsų vardas">
        <?php echo showInputError($nameErr) ?>
        <input type="text" name="email" id="email" value="" placeholder="El. paštas">
        <?php echo showInputError($emailErr) ?>
        <input type="number" name="phone" id="phone" value="" placeholder="Telefono numeris">
        <?php echo showInputError($phoneErr) ?>
    </div>

    <h3>NORIU SUSISIEKTI SU</h3>

    <div class="input-group radio-input">
        <label for="sales">Pardavimų skyriumi</label>
        <input type="radio" name="contact" <?php echo checkRadio($contact, 'sales') ?> id="sales" value='Pardavimų skyriumi'>

        <label for="admin">Administracija</label>
        <input type="radio" name="contact" <?php echo checkRadio($contact, 'admin') ?> id="admin" value='Administracija'>

        <label for="customer">Klientų aptarnavimo skyriumi</label>
        <input type="radio" name="contact" <?php echo checkRadio($contact, 'customer') ?> id="customer" value='Klientų aptarnavimo skyriumi'>
        <?php echo showInputError($contactErr) ?>
    </div>
    <select name="options" id="" class="select-box">
        <option value="">Pasirinkite temą</option>
        <option value="Trumpi skundai" name="topic">Trumpi skundai</option>
        <option value="Ilgi skundai" name="topic">Ilgi skundai</option>
        
    </select>
    <div class="input-group">
        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Jūsų žinutė"></textarea>
    </div>

    <button type='submit'>Submit</button>

</form>


<div class="frame">

    <?php foreach($_POST as $field => $value): ?>
        <div style="display: flex; margin: 5px;">
            <div><?php echo $field . ': '; ?></div>
            <div><?php echo $value; ?></div>    
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>








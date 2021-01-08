<?php 
echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = $email = $contact = $topic = $comment = '';
$phone = null;
$nameErr = $emailErr = $phoneErr = $contactErr = $topicErr = $commentErr = '';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    

    // username validacija =========================
    if (empty($_POST['name'])) {
        $nameErr = 'Please fill in your Name';
    } else {
        $name = cleanInput($_POST['name']);
    }

    // email validacija =========================
    if (empty($_POST['email'])) {
        $emailErr = 'Please fill in you email';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Please check you email';
        }
    }
    // phone validacija =========================

    if (empty($_POST['phone'])) {
        $phoneErr = 'Please fill in your phone';
    } else {
        $phone = $_POST['phone'];
        if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)){
            $phoneErr = 'Only numbers are allowed';  
        }
    }

    // noriu susisiekti su kazkuo validacija =============

    if (empty($_POST['contact'])) {
        $contactErr = 'Please select one option';
    } else {
        $contact = $_POST['contact'];
    }


    // pasirinkti tema skundo validacija =============

    if (empty($_POST['topic'])) {
        $topicErr = 'Please select one option';
    } else {
        $topic = $_POST['topic'];
    }

    // comment validacija =====================
    if (empty($_POST['comment'])) {
        $commentErr = 'Type in your question';
    } else {
        $comment = $_POST['comment'];
    }

}



// helper functions
function cleanInput($inputText){
    $cleanName = htmlspecialchars($inputText);
    $trimmedCleanedText = trim($cleanName);
    return $trimmedCleanedText;  
}

function showInputError($errorField){
    if ($errorField !== '') {
        return "<p class='error-alert'>$errorField</p>";
    }
}


function checkRadio($input, $radioFieldValue){
    if ($input === $radioFieldValue) {
        return 'checked';
    }
}










?>
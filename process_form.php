<?php

$userNameErr = "";
$emailIDErr = "";
$phoneNoErr = "";
$genderErr = "";
$tcErr = "";

$userName = "";
$emailID = "";
$phoneNo = "";
$gender = "";
$tc = "";

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validate the User Name 
    if (empty($_POST["userName"])) {
        $userNameErr = "User Name is required";
    } else {
        $userName = input_data($_POST["userName"]);
        //checks if user name only contains alphabets, numbers, and underscores 
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $userName)) {
            $userNameErr = "Only alphabets, numbers, and underscores are allowed for User Name";
        }
    }

    //validate the user EmailID ID  
    if (empty($_POST["emailID"])) {
        $emailIDErr = "Email ID is required";
    } else {
        $emailID = input_data($_POST["emailID"]);
        // To check that the e-mail address is well-formed  
        if (!filter_var($emailID, FILTER_VALIDATE_EMAIL)) {
            $emailIDErr = "Invalid Email ID format";
        }
    }

    //validate the user phone number 
    if (empty($_POST["phoneNo"])) {
        $phoneNoErr = "Phone Number is required";
    } else {
        $phoneNo = input_data($_POST["phoneNo"]);
        // To check that phone no. is well-formed  
        if (!preg_match("/^[0-9]*$/", $phoneNo)) {
            $phoneNoErr = "Only numeric values are allowed!!";
        }
        
        if (strlen($phoneNo) != 11) {
            $phoneNoErr = "Please provide a phone number of 11 digits!!";
        }
    }

    
    if (empty($_POST["gender"])) {
        $genderErr = "Please provide your Gender";
    } else {
        $gender = input_data($_POST["gender"]);
    }

    
    if (!isset($_POST['tc'])) {
        $tcErr = "Please accept our terms & conditions.";
    } else {
        $tc = input_data($_POST["tc"]);
    }
}


function input_data($data)
{
    
    $data = trim($data);
    
    $data = htmlspecialchars($data);
    return $data;
}
?>

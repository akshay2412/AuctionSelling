<?php
//echo 'in validate';
function isEmail($inputText)
{
    $mailformat = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
    if(preg_match($mailformat,$inputText))
    {
        return true;
    }
    else
    {
       echo '<script> alert("You have entered an invalid email address!") </script>';
        return false;
    }
}
//To check a password between 8 to 16 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character

function isCorrectPass($inputtxt) 
{ 
    $decimal=  "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,16}$/";
    if(preg_match($decimal,$inputtxt)) 
    {   
        return true;
    }
    else
    { 
        echo '<script> alert("Invalid pass...!") </script>';
        return false;
    }
} 

// to check username or location
function isCorrectName($inputtxt) 
{ 
    $decimal=  "/^[a-zA-Z].{8,16}$/";
    if(preg_match($decimal,$inputtxt)) 
    {   
        return true;
    }
    else
    { 
         echo '<script> alert("Wrong name...!")';
        return false;
    }
} 
function isString($inputtxt) 
{  //echo 'intstrr';
    $decimal=  '/^[a-zA-Z0-9].{1,16}$/';
    if(preg_match($decimal,$inputtxt)) 
    {//   echo 'if';
        return true;
    }
    else
    {  //echo 'else';
         echo '<script> alert("Wrong String...!")</script>';
        return false;
    }
} 
function isValidPrice($inputtxt) 
{ 
    $decimal=  "/^[0-9].{1,8}$/";
    if(preg_match($decimal,$inputtxt)) 
    {   
        return true;
    }
    else
    { 
         echo '<script> alert("Wrong price...!") </script>';
        return false;
    }
} 

?>
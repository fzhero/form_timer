<?php

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") 
{
       $secret = '6Leo82McAAAAANUVPgRv-jFQgPFd-_7ia5DWRj6s';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success)
    {
     
        echo "Data inserted!";
    }
}
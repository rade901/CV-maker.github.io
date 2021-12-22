<?php
// define variables and set to empty values
if(isset($_POST['submit'])){
    if(empty($_POST['name'])){
        $nameErr = "Name is required";
    }
    else{
        $name = test_input($_POST['name']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed"; 
        }
    }
}
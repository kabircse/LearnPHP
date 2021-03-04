<?php
/*
    1. Validation:   Check input data in proper form.
    2. Sanitization: Remove illegal character from input data.

    A. filter_var(variable, filter, options) -> This functions validate and sanitize the input.
*/

// input data
$input_roll = 120;

// Remove all illegal characters from input data
$input_roll = filter_var($input_roll, FILTER_SANITIZE_URL);

// Validate sample integer value
if(filter_var($input_roll, FILTER_VALIDATE_INT)){
    echo "<br /> The <b>$input_roll</b> is a valid integer";
} else {
    echo "<br /> The <b>$input_roll</b> is not a valid integer";
}


// Validate sample integer value with options

$min = 1;
$max = 200;

if (filter_var($input_roll, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo ("<br /> The <b>$input_roll</b> is a not valid integer || not within the legal range");
} else {
    echo ("<br /> The <b>$input_roll</b> is a valid integer & within the legal range");
}


// Validate url with query parameter

$url = "https://www.w3schools.com?id=5"; // validated
//$url = "https://www.w3schools.com"; // not valdated

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("<br />$url is a valid URL with a query string");
} else {
    echo("<br />$url is not a valid URL with a query string");
}
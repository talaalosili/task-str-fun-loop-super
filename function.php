<!-- ///////1 -->
<?php
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 3;
if (is_prime($number)) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
echo "<hr>";
?>
<!-- ///////2 -->
<?php
function reverse_string($str) {
    return strrev($str);
}

$input_string = "remove"; 
echo reverse_string($input_string);
?>
<!-- ///////3 -->
<?php
function all_lowercase($str) {
    return ctype_lower($str);
}

$input_string = "remove";

if (all_lowercase($input_string)) {
    echo "Your String is Ok";
} else {
    echo "Your String is not all lowercase";
}
echo "<hr>";
?>
<!-- /////4 -->
<?php
function swap(&$x, &$y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$x = 12; 
$y = 10; 

swap($x, $y); 

echo "x = $x, y = $y"; 
echo "<hr>";
?>
<!-- ////////6 -->
<?php
function is_armstrong($num) {
    $sum = 0;
    $temp = $num;
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = intval($temp / 10);
    }
    return $sum == $num;
}

$number = 407; 

if (is_armstrong($number)) {
    echo "$number is an Armstrong Number";
} else {
    echo "$number is not an Armstrong Number";
}
echo "<hr>";
?>
<!-- /////7 -->
<?php
function is_palindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    return $str == strrev($str);
}

$input_string = "Eva, can I see bees in a cave?";

if (is_palindrome($input_string)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}
echo "<hr>";
?>
<!-- ///////8 -->
<?php
function remove_duplicates($array) {
    return array_values(array_unique($array));
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = remove_duplicates($array1);
print_r($array1);
?>
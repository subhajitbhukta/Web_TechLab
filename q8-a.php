<?php
function swapNumbers(&$num1, &$num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}

$num1 = 10;
$num2 = 20;

echo "Before swapping: num1 = $num1, num2 = $num2<br>";

// Call the function
swapNumbers($num1, $num2);

echo "After swapping: num1 = $num1, num2 = $num2";
?>

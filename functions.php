<?php
function calcNums($num1, $operator, $num2) {
    switch ($operator) {
        case "add":
            return $num1 + $num2;
        case "sub":
            return $num1 - $num2;
        case "mul":
            return $num1 * $num2;
        case "div":
            return $num1 / $num2;
        default:
            return "Error";
    };
};

$num1 = $_GET["num1"];
$operator  = $_GET["operator"];
$num2 = $_GET["num2"];

echo "Value: " . calcNums($num1, $operator, $num2);
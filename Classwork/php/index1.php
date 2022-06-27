<?php
$num1 = 1;
$num2 = 2;
$choice = "-";
switch ($choice) {
    case "-":
        $dif= $num2 - $num1;
        echo "$dif";
        break;
    case "2":
        $sum = $num1 + $num2;
        echo "$sum";
        break;
    default:
        echo "Invalid";
        break;
}

$ages = ["Peter" => 22, "Clark" => 32, "John" => 28];

echo $ages["Clark"];


?>
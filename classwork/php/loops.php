<?php



$start =5;
$end = 23;
$sum = 0;

for($i = $start; $i <= $end; $i++) {
    echo $i . " ";

    $sum += $i;
}

echo "<br>Sum:" . $sum;



?>
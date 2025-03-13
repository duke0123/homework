<?php
function roll_dice(){
    return rand(1,20);
}



$total = 0;


for($i = 1; $i<=10; $i++){

    $roll = roll_dice();

    $total += $roll;

    echo "$i: Rolled $roll<br>";
}

echo "Total: $total";

?>








<?php



$numbers = [10, 20, 30, 40, 50];

// loop for each
echo "<strong>USing foreach():</strong><br>";

foreach ($numbers as $key => $value) {
    echo "key=$key, value=$value<br>";
}

echo "<br>";


//2. loop through using for()
 echo "<strong>USing for():</strong><br>";
 for ($key = 0; $key < count($numbers); $key++){
    echo "key=$key, value=" . $numbers[$key] . "<br>";
 }


 echo "<br>";
 
 //3. loop through using while()
 echo "<strong>Using while():</strong><br>";
 $key = 0;
 while($key < count($numbers)){
    echo "key=$key, value=" . $numbers[$key] . "<br>";
    $key++;
 }
?>

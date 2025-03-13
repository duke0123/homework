<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fahrenheit = $_POST['fahrenheit'];

    $celsius = ($fahrenheit - 32) * 0.5556;

    echo "<p style='color:blue;'> $fahrenheit degrees fahrenheir is equivalent to " . number_format($celsius,4)
}

?>

<form method="POST" action="">
    <label for="fahrenheit">The temperature in fahrenheit is:</label>
    <input type="number" id="fahrenheit" name="fahrenheit" required>
    <button type="submit">Convert</button>
</form>





<!-- function convertToCelsius($fahrenheit){
 return ($fahrenheit - 32)} * 0.5556;}
 
 function temperaturemessage($celsius) {
 if ($celsius < 0)
 return "Brrr, it's freezing!"


 
}-->
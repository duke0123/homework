<?php

// File: keys.php
// Class: PHP 1
// Author: Kim Moser <kim@palmbeachcodeschool.com>
// Date: 12/4/2019

$hobbies = [ 'fishing', 'golf', 'tennis' ];
$states = [ 'NY' => 'New York', 'FL' => 'Florida', 'TX' => 'Texas' ];
echo "<strong>Hobbies:</strong><br>";
foreach( $hobbies as $key => $value ) {
	echo "key=$key, value=$value<br>";
}

echo "<br><strong>States:</strong><br>";
foreach( $states as $abbreviation => $stateName ) {
	echo "key=$abbreviation, value=$stateName<br>";
}

?>






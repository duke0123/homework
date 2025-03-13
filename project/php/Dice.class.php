<?php
class Dice
{
    private $face_value; // A number from 1 to 6
    private $num_sides; // how many sides does this dice object have

    function __construct($n){
        $this->num_sides = $n;
        
    }

    // Roll the die:
    function roll()
    {
        $this->face_value = rand(1, $this->num_sides); // set face value to a random number from 1 to number of sides
    }

    // Return the face value (i.e. the number facing up):
    function get_face_value()
    {
        return $this->face_value; // Return the current face value
    }
}

?>

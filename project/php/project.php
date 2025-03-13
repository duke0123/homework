<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);
    $country = htmlspecialchars($_POST["country"]);
    $subject = htmlspecialchars($_POST["subject"]);

    echo "These are the data";








}
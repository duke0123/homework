<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = $_REQUEST['fname'];
    $last_name = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $country = $_REQUEST['country'];

    echo "<p>Your name is: " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</p>";
    echo "<p>Your email address is: " . htmlspecialchars($email) . "</p>";
    echo "<p>Your country is: " . ($country == 'US' ? 'United States' : 'Canada') . "</p>";
} else {
?>

<form method="POST" action="">
    First name: <input type="text" name="fname" required /><br />
    last name:  <input type="text" name="fname" required /><br />
    Email:  <input type="text" name="fname" required /> <br />
    Country:
    <select name="country">
        <option value='us'>United States</option>
        <option value='CA'>Canada</option>
</select><br />
<button type="submit">Submit</button>
</form>
<?php
}
?>
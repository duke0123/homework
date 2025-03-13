<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    // Connect to the DB server and select a given DB:
    require_once 'dbconnect.inc.php';
    // Connect to YOUR_DB_NAME db on MySQL on HOSTNAME using YOUR_DB_USER_NAME and YOUR_DB_PW credentials

    // 2a) Create the query string:
    $sku = $_REQUEST['sku'] ?? '';
    $my_sql = "SELECT * FROM inventory WHERE sku ='$sku'";

    // 2b) Perform the query:
    $result = $db->query($my_sql); // E.g. SELECT * FROM inventory

    // Fetch the results of the query:
    $row = $result->fetch(PDO::FETCH_ASSOC);
    // Do something with each $row of data…

    // Do something with each $row of data…
    // var_dump($row);
    // echo "<tr><td>asdfasdfasd</td></tr>";
    if ($row === FALSE) {
    ?>
        bad sku!
        <?php

    } else {
        if (isset($_REQUEST['q'])) {
            $quantity = $_REQUEST['q'];

            $sq1 = "REPLACE INTO `cart` (`sku`, `in_cart`) VALUES ('$sku', '$quantity')";

            echo $sq1;
            $db->query($sq1);


        ?>
            Added to cart! <a href="cart.php">View Cart</a>
        <?php
        }
        ?>


        <h1>
            <?= $row['title'] ?>
        </h1>

        <p>
            <?= $row['description'] ?>
        </p>

        <form action="details.php">
            Price: $<?= number_format($row['unit_price'], 2) ?> each<br>
            How many: <input name="q"><br>
            <input type="hidden" name="sku" value="<?= $_REQUEST['sku'] ?>">
            <button type="submit" class="btn btn-info">
                Add to Cart
            </button>

        </form>



    <?php
    }
    ?>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
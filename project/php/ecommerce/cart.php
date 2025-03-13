<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Cart</h1>

    <table class="table table-striped">
        <tr>
            <th>Item</th>
            <th class="text-end">Unit Price</th>
            <th class="text-end">In Cart</th>
            <th class="text-end">Subtotal</th>
        </tr>

        <?php
        // Connect to the DB server and select a given DB:
        require_once 'dbconnect.inc.php';
        // Connect to YOUR_DB_NAME db on MySQL on HOSTNAME using YOUR_DB_USER_NAME and YOUR_DB_PW credentials

        // 2a) Create the query string:
        $my_sql = "SELECT
inventory.sku, inventory.title, inventory.unit_price, cart.in_cart
FROM
cart
LEFT JOIN inventory ON (
 cart.sku = inventory.sku
 )";

        // 2b) Perform the query:
        $result = $db->query($my_sql); // E.g. SELECT * FROM inventory

        // Fetch the results of the query:
        $grand_total = 0;
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $subtotal = $row['in_cart'] * $row['unit_price'];
            $grand_total += $subtotal; // Add $subtotal to $grand_total
            // Do something with each $row of data…
            //var_dump($row);
            //echo "<tr><td>woooo</td></tr>";
        ?>
            <tr>
                <td>
                    <a href="details.php?sku=<?= $row['sku'] ?>">
                        <?= $row['title'] ?>
                    </a>
                </td>
                <td class="text-end">
                    $<?= number_format($row['unit_price'], 2) ?>
                </td>
                <td class="text-end">
                    <?= $row['in_cart'] ?>
                </td>
                <td class="text-end">
                    $<?= number_format($subtotal, 2) ?>
                </td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <th>TOTAL</th>
            <th colspan="3" class="text-end">$<?= number_format($grand_total, 2) ?></th>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
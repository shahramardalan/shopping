<?php
include_once("plan.php");
include_once("carts.php");
include_once("createCarts.php");
include_once("renderPlan.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Shopping</title>
</head>

<body>
    <div class="m-auto max-w-2xl">
        <?php
        foreach ($cartItems->getFromCart() as $item) {
            echo renderPlan($item->getName(), $item->getPrice());
        }
        ?>
    </div>
    <?php
    $plans = null;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ($_POST['PLAN1']) {
            $plans = $_POST['PLAN1'];
            echo "<h1>{$plans} added to cart</h1>";
        } elseif ($_POST['PLAN2']) {
            $plans = $_POST['PLAN2'];
            echo "<h1>{$plans} added to cart</h1>";
        } elseif ($_POST['PLAN3']) {
            $plans = $_POST['PLAN3'];
            echo "<h1>{$plans} added to cart</h1>";
        }
    }
    ?>
</body>

</html>
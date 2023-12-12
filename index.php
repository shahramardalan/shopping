<?php
include_once("plan.php");
include_once("carts.php");
include_once("createCarts.php");
include_once("renderPlan.php");
//session_start();
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
    $plans = [];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        foreach ($cartItems->getFromCart() as $item) {
            if (isset($_POST[$item->getName()])) {
                //array_push($plans, ["name" => isset($_POST[$item->getName()]), "price" => isset($_POST[$item->getPrice()])]);
                echo "<h1>{$item->getName()} with price {$item->getPrice()} added to cart</h1>";
            }
        }
    }
    ?>
</body>

</html>
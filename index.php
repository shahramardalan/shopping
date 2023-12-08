<?php
include_once("plan.php");
include_once("carts.php");
include_once("createCarts.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
        
        foreach($cartItems->getFromCart() as $item) {
            print_r(`<div>{$item}</div>`);
        }
    ?>
    </pre>
</body>

</html>
<?php


$plan1 = new Plan("0001", "PLAN1", "$20");
$plan2 = new Plan("0002", "PLAN2", "$50");
$plan3 = new Plan("0003", "PLAN3", "$90");

$cartItems = new Carts();

$cartItems->addToCart($plan1)->addToCart($plan2)->addToCart($plan3);



<?php

class Carts
{
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    public function addToCart(Plan $plan)
    {
        $this->items[] = $plan;
        return $this;
    }

    public function getFromCart(){
        return $this->items;
    }
}

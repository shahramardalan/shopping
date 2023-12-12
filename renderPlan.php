<?php
function renderPlan($name, $price)
{
    $plan = "<form method='post' action='#'>";
    $plan .= "<div class='flex justify-between items-center gap-x-24 rounded-xl bg-blue-100 p-5 mt-5'>";
    $plan .= "<input value='{$name}' name='{$name}' class='font-bold pb-2' />";
    $plan .= "<p name='{$price}' class='font-medium pb-1 bg-blue-200'>Price : {$price}</p>";
    $plan .= "<button type='submit' class='bg-blue-400 p-2'>Add to cart</button>";
    $plan .= "</div>";
    $plan .= "</form>";

    return $plan;
}

?>
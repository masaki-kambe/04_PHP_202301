<?php
$prices = [298, 129, 198, 274, 625, 273, 296, 325, 200, 127, 398];

function getPriceInTax($prices, $tax = 8)
{
    $total = 0;
    foreach ($prices as $price) {
        $total += $price;
    }
    return floor($total * (1 + $tax / 100));
}
echo number_format(getPriceInTax($prices, 10)) . '円';

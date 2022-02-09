<?php
function calculateVat($price, $vatRate)
{
    if ($price <= 0 || $vatRate < 0) {
        return -1;
    }

    return $price * ($vatRate / 100);
}

$price = readline("Enter the price: ");
$vatRate = readline("Enter the VAT rate (in percentage): ");

$vat = calculateVat($price, $vatRate);
if ($vat == -1) {
    echo "Invalid input";
} else {
    echo "The VAT is: " . $vat;
}

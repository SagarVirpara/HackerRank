<?php

$handle = fopen ("php://stdin","r");
fscanf($handle, '%f', $mealCost);
fscanf($handle, '%i', $tipPercent);
fscanf($handle, '%i', $taxPercent);

$tip = $mealCost * ( $tipPercent / 100 );
$tax = $mealCost * ( $taxPercent / 100 );
$totalCost = $mealCost + $tip + $tax;

echo "The total meal cost is ".round( $totalCost )." dollars.";

?>

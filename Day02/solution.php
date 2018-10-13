<?php
    function solve($mealCost, $tipPercent, $taxPercent) {
        // set variables for totalcost, tip, and tax.
        $totalCost; $tip; $tax;

        // find out tip and tax
        $tip = $mealCost * $tipPercent / 100;
        $tax = $mealCost * $taxPercent / 100;

        // sum the total cost
        $totalCost = $mealCost + $tip + $tax;
        
        // round out the total
        $totalCost = round($totalCost);

        // print out the total
        printf($totalCost);

    }
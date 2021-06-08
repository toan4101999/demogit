<?php
    function solve($meal_cost, $tip_percent, $tax_percent) {
        // Write your code here
        
        $tip=(double)($meal_cost/100)*$tip_percent;
        $tax=(double)($meal_cost/100)*$tax_percent;
        $total=$meal_cost+$tax+$tip;
        return round($total);
    }
    echo solve(12.00,20,8);
?>
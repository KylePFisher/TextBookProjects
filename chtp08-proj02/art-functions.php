<?php
    function outputCartRow($file, $product, $quantity, $price)
    {
        echo "<tr>";
        echo "<td><img class=\"img-thumbnail\" src=$file alt=\"...\"></td>";
        echo "<td>$product</td>";
        echo "<td>$quantity</td>";
        echo "<td>" . "$" . number_format($price, 2, '.', '') . "</td>";
        // $amount = $price * $quantity;
        echo "<td> " . "$" . number_format(($price * $quantity), 2, '.', '') . "</td>";
        echo "</tr>";
    }
    
    function outputCheckoutRow($value)
    {
        echo "<td >" . "$" 
                  . number_format($value, 2, '.', '')
                  . "</td>";
    }
?>
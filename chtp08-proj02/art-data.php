<?php
    $file1 = "images/art/tiny/116010.jpg";
    $product1 = "Artist Holding a Thistle";
    $quantity1 = 2;
    $price1 = 500;
    
    $file2 = "images/art/tiny/113010.jpg";
    $product2 = "Self-portrait in a Straw Hat";
    $quantity2 = 1;
    $price2 = 700;
    
    $subtotal = ($price1 * $quantity1) + ($price2 * $quantity2);
    $tax = $subtotal * .10;
    if ($subtotal > 2000)
    {
        $shipping = 0;
    }
    else 
    {
        $shipping = 100;
    }
    $grandtotal = ($subtotal + $tax + $shipping);
?>
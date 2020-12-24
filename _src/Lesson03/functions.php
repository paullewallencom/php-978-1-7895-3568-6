<?php

    $sweaterPrice = 50;
    $percentOff = 0.25;

    function couponCode($price, $discount){
        return $price * $discount;
    }


    echo "The sweater originally costs $" . $sweaterPrice . " with the discount you'll pay $" . ($sweaterPrice - couponCode($sweaterPrice, $percentOff)) . "\n";
    

?>
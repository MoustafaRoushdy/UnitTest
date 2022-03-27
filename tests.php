<?php
    include('./function.php');

    $sum = sumOfArray([10,20,40]);
    echo "sumOfArray returns sum of numbers:".($sum ==70 ? "pass":"fail")."\n";

    $sum = sumOfArray([]);
    echo "sum of empty array:".($sum ==0 ? "pass":"fail")."\n";
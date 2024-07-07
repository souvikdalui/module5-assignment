


<?php

    $number1 = 65;
    $number2 = 83;
    $number3 = 97;

    if ($number1 > $number2 && $number1 > $number3) {
        echo "Largest number is number1= ". $number1;
    }
    else if ($number2 > $number3 && $number2 > $number1) {
        echo "Largest number is number2= ". $number2;
    }
    else if ($number3 > $number2 && $number3 > $number1) {
        echo "Largest number is number3= ". $number3;
    }
    else  {
        echo "All numbers Are Equal ";
    }
?>
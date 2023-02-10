
<?php

$ecoma =  $ecomq_1 + $ecomq_2 + $ecomq_3 + $ecomq_4 + $ecomq_5;

if ($maina > 0 && $maina <= 8) {
    echo "fixer upper package";
    // Displays starter package and fixer upper package;
} else if ($maina > 8 && $maina < 16) {
    echo " optimizer package";
    //  Displays starter package and optimizer package
} else if ($maina == 16) {
    echo "premium package";
    // Display starter package and premium package
}

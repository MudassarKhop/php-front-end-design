<?php

$npoa = $npoq_1 + $npoq_2 + $npoq_3 + $npoq_4 + $npoq_5;

if ($npoa > 0 && $npoa <= 6) { ?>
    <style>
        #institution {
            display: none;
        }
    </style>
<?php echo "starter package";
}
//displays starter package
else if ($npoa > 6 && $npoa <=  12) { ?>
    <style>
        #institution {
            display: none;
        }
    </style>
<?php echo "growth package";
}

//displays growth package
?> <?php if ($npoa > 12 && $npoa <= 36) { ?>
    <style>
        #institution {
            display: none;
        }
    </style>
<?php echo "premium package";
        }
     
     //displays premium package

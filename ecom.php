<?php

$ecoma =  $ecomq_1 + $ecomq_2 + $ecomq_3 + $ecomq_4 + $ecomq_5;
if ($ecoma <= 10) {

  switch (true) {
    case $ecomq_6 === 'yes':
      if ($maina <= 8) {
        // Displays starter package and fixer upper package;
      } else if ($maina > 8 && $maina <= 16) {
        //  Displays starter package and optimizer package
      } else if ($main > 16 && $maina < 16) {
        // Display starter package and premium package
      }
    case $ecomq_6 === 'no': //Displays starter package only

  }

  //displays starter package

} else if ($ecoma > 10 && $ecoma <=  20) {

  switch (true) {
    case $ecomq_6 === 'yes':
      if ($maina <= 8) {
        // Displays growth package and fixer upper package;
      } else if ($maina > 8 && $maina <= 16) {
        //  Displays growth package and optimizer package
      } else if ($main > 16 && $maina < 16) {
        // Display growth package and premium package
      }
    case $ecomq_6 === 'no': //Displays growth package only

  }
} else if ($ecoma > 20 && $ecoma <= 30) {

  switch (true) {
    case $ecomq_6 === 'yes':
      if ($maina <= 8) {
        // Displays premium package and fixer upper package;
      } else if ($maina > 8 && $maina <= 16) {
        //  Displays premium package and optimizer package
      } else if ($main > 16 && $maina < 16) {
        // Display premium  package and premium package
      }
    case $ecomq_6 === 'no': //Displays premium package only

  }

  //displays premium package

}

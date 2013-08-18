<?php
  $firstName = "aryeh";
  $lastName = "caplan";
  $fullName = $firstName. " " . $lastName;

    echo $fullName. '<br>';
    echo strchr($fullName, "a"). '<br>';
    echo strpos($fullName, "l"). '<br>';

      $test = strpos($fullName, "p");
      $test2 = strpos($fullName, "n");

        echo $test. '<br>';
        echo $test2. '<br>';

          echo $test++. '<br>';
          echo $test++. '<br>';

             echo $test+$test. '<br>';
             echo $test2+$test2. '<br>';
?>

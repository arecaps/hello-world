<?php
$a = rand(10,99);
$b = rand(10,99);

  echo "$a" . "<br>"; 
  echo "$b" . "<br>"; 

if ($a>$b) {
      echo "a is bigger than b";
  } elseif ($a == $b) {
      echo "a = b";
  } else {
      echo "a is smaller than b";
  }
?>

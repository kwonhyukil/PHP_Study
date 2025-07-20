<?php

$num = 1;

while ($num <= 100) {
  if ($num % 3 == 0) {
    echo $num . " ";

    if ($num % 10 == 0) {
      echo "<br>";
    }
  }
  $num++;
}

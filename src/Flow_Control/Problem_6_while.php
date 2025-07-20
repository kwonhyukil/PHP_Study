<?php

$inch = 10;

echo "-------------------------<br>";
echo "인치 센티미터<br>";
echo "-------------------------<br>";
while ($inch <= 20) {
  echo $inch . " " . $inch * 2.54 . "<br>";
  $inch += 2;
}

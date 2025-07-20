<?php

echo str_repeat("-", 30) . "<br>";
echo "달러 원화 유로 <br>";
echo str_repeat("-", 30) . "<br>";

$dollar = 1180.60;
$euro = 1350.30;

for ($i = 10; $i <= 20; $i += 2) {
  echo $i . " " . $i * $dollar . " " . $i * $euro;
  echo "<br>";
}
echo str_repeat("-", 30) . "<br>";



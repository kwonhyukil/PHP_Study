<?php

$Score = 90;

echo "시험 점수 : $Score <br>";

if (90 <= $Score && $Score <= 100) {
  echo "등급 : 수";
} elseif (80 <= $Score && $Score < 90) {
  echo "등급 : 우";
} elseif (70 <= $Score && $Score < 80) {
  echo "등급 : 미";
} elseif (60 <= $Score && $Score < 70) {
  echo "등급 : 양";
} elseif ($Score < 60) {
  echo "등급 : 가";
} else {
  echo "입력 점수 오류!";
}

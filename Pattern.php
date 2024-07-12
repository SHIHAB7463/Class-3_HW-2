<?php


$rows = 4;

for ($i = 1; $i <= $rows; $i++) {
  for ($j = $i; $j < $rows; $j++) {
    echo "&nbsp;&nbsp;&nbsp";
  }
  for ($j = 0; $j <= (2 * $i - 2); $j++) {
    echo "* ";
  }
  echo "<br>";
}

echo "<br>";
echo "<br>";


for ($i = 0; $i < 5; $i++) {

  for ($j = 0; $j <= 7; $j++) {
    echo "*";
  }
  echo "<br>";}

?>

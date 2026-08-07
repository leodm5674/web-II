<?php

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(6, 7, 8, 9, 10);
$array3 = array(11, 12, 13, 14, 15);
$array4 = array(16, 17, 18, 19, 20);

echo "<ol>";
foreach ($array1 as $v) {

    echo "<li>" . $v . "</li>";
}
echo "</ol>";

echo "<ol>";
foreach ($array2 as $e) {

    echo "<li>" . $e . "</li>";
}
echo "</ol>";

echo "<ol>";
foreach ($array3 as $f) {

    echo "<li>" . $f . "</li>";
}
echo "</ol>";

echo "<ol>";
foreach ($array4 as $x) {

    echo "<li>" . $x . "</li>";
}
echo "</ol>";

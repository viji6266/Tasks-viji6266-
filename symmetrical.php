<?php
$A =array("-3", "-2", "-1", "4");
$B= array("0","1","2","4");
$C= array_diff($A, $B);
print_r($C);
echo "<br>";
$D = array_diff($B,$A);
print_r($D)


?>

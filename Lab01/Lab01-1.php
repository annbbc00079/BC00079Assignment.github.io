<?php

$s = "Hellon/Word";
echo $s;
$s = 'It\'s\n';
echo $s;
echo "\nHello<br>Word";
echo "\u{00c2a9}";
echo "\u{c2a9}";
?>
<hr>
<?php
$a = "Hello";
$$a = "Word";

echo "$a ${$a}<br>";
?>
<hr>
<?php
$a = 1;
$b = 3;

$c = $a + $b;
echo $c;
echo "Sum $a and $b is $c";
echo 'Sum '.$a.' and '.$b.' is '.($a + $b);
?>
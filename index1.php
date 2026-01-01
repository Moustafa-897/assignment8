<?php
// 1) While loop: 1 to c1
$c1 = 10;
$i = 1;
while ($i <= $c1) {
    echo $i . ($i == $c1 ? "" : ",");
    $i++;
}

// 2) Do-while loop: c2 down to 1
$c2 = 15;
$j = $c2;
do {
    echo $j . ($j == 1 ? "" : "-");
    $j--;
} while ($j >= 1);


// 3) For loop: Multiplication table
$c3 = 5;
for ($k = 1; $k <= 10; $k++) {
    echo "{$c3}x{$k} = " . ($c3 * $k) . "\n";
}


// 4) Foreach: Indices and variables
$languages = ["HTML", "CSS", "JS"];
foreach ($languages as $index => $value) {
    echo "$index -> $value\n";
}


// 5) Foreach: Values only
foreach ($languages as $value) {
    echo "$value\n";
}
?>

<?php
for ($i=1; $i<=5; $i++) {
    for ($j=1; $j<=$i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br><br>";

for ($i = 1; $i <= 5; $i++) {
    echo str_repeat("* ", $i) . "<br>";
}

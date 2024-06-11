<?php
set_time_limit(0);
ini_set('memory_limit', '-1');

echo "Create a PHP function factorial that calculates the factorial of a given number using recursion: <br>";
function factorial($number)
{
    if ($number < 2) {
        return 1;
    }
    return $number * factorial($number - 1);
}
echo factorial(5);
echo "<br>";
echo factorial(3);
echo "<br><br>";

echo "Write a PHP script to print all prime numbers between 1 and 50 using nested loops: <br>";
function prime($nums)
{
    if ($nums < 2) {
        return false;
    }
    for ($i = 2; $i < sqrt($nums); $i++) {
        if ($nums % $i === 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i < 50; $i++) {
    if (prime($i)) {
        echo $i." ";
    }
}
echo "<br><br>";

echo "Create a PHP script that uses a while loop to find the sum of digits of a given number: <br>";
$given_number = 123;
$sum = 0;
while ($given_number) {
    $sum += $given_number % 10;
    $given_number = $given_number / 10;
}
echo $sum;

echo "<br><br>";

echo "Write a PHP script that prints the Fibonacci sequence up to the 10th number using a for loop: <br>";
function fibonacci()
{
    $a = 0;
    $b = 1;

    echo "$a $b ";

    for ($i = 2; $i < 10; $i++) {
        $c = $a + $b;
        echo "$c ";
        $a = $b;
        $b = $c;
    }
}
fibonacci();
echo "<br><br>";

echo "Write a PHP script to merge two arrays and remove duplicate values: <br>";
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];
$merged_array = array_merge($array1, $array2);
//print_r($merged_array);
$unique_array = array_unique($merged_array);
print_r($unique_array)
?>

<!--<html>-->
<!--<body>-->
<!--<form method="post" action="experiments.php/"><script>alert('hacked')</script>-->
<!--</body>-->
<!--</html>-->

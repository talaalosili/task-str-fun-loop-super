<?php
$numbers=range(1,10);
$output=implode("-",$numbers);
echo $output;
echo "<hr>";
$total=0;
for($i=0;$i<=30;$i++){
    $total+=$i;
}
echo "Total: " .$total;
echo "<hr>";
$size=5;
for($i=0;$i < $size;$i++){
    for($x=0;$x < $size;$x++){
         echo"*  ";
    }
    echo "<br>";
}
echo "<hr>";

$number=5;
$factorial=1;
for($i=1;$i<=$number;$i++){
    $factorial*=$i;
}
echo $factorial;

echo "<hr>";

$number1=10;
$fibonacci = [0, 1];
for($i=2;$i<$number1;$i++){
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}
foreach($fibonacci as $value){
   echo $value." "; 
}

echo "<hr>";

$text = "Orange Coding Academy";
$char = 'c';
$count = substr_count(strtolower($text), $char);
echo $count;

echo "<hr>";


?>
<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
</head>
<body>
    <?php
    $rows = 5;
    $cols = 5;

    echo "<table border='1' cellpadding='3px' cellspacing='0px'>";

    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<td>Row $i, Col $j</td>";
        }
        echo "</tr>";

    }

    echo "</table>";
    echo "<hr>";
    ?>
</body>
</html>
<?php

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz";
    }
    else {
        echo $i;
    }
    echo " ";
}
echo "<hr>";

$n = 5;
$num = 1;


for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
echo "<hr>";
?>
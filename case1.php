<?php
function count_string($word){
    $word_arr = str_split($word);
    $abjad = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $found = array_intersect($abjad, $word_arr);
    $count = array_count_values($word_arr);

    $result = [];
    foreach ($found as $item){
        $result[$item] = $count[$item];
    }

    return $result;
}

$string = 'aabbckkkml';
$string1 = 'aaaabsdfbhckkhfdkml';
echo 'Example 1:<br>'; echo $string;
echo "<br>";
foreach(count_string($string) as $s1 => $t1){
    echo $s1; echo $t1;
}
echo "<br> <br>";

echo 'Example 2:<br>'; echo $string1;
echo "<br>";
foreach(count_string($string1) as $s2 => $t2){
    echo $s2; echo $t2;
}
?>
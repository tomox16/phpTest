<?php
// 課題1
function double($num){
    $num *= 2;
    return $num;
}

echo double(10);
echo "\n";

// 課題2
function plus($a, $b){
    return $a + $b;
}

echo plus(5, 8);
echo "\n";

// 課題3
function multi($arr){
    $total = 1;
    foreach ($arr as $num) {
        $total *= $num;
    }
    return $total;
}

$array = [1, 3, 5, 7, 9];
echo multi($array);
echo "\n";

// 課題4
function max_array($arr){
    // とりあえず配列の最初の要素を1番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
        if ($max_number < $a) {
            $max_number = $a;
        }
     }
    
     return $max_number;
     }

echo max_array($array);
echo "\n";

// 課題5
$text = '<p>PHP TEST</p>';
echo strip_tags($text);
echo "\n";

array_push($array, 10, 11);
print_r($array);
echo "\n";

$array2 = [12, 13];
$result = array_merge($array, $array2);
print_r($result);
echo "\n";

echo "現在のタイムスタンプ：".time();
echo "\n";

echo "2020年1月1日0時0分のタイムスタンプ：".mktime(0,0,0,1,1,2020);
echo "\n";

echo date("Y/m/d H:i:s");
echo "\n";

?>
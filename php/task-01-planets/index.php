<!DOCTYPE html>
<html>
<body>
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

$planets = array_filter(array_unique($planets), function($e){
    return (isset($e) && !empty($e));
});

function pickrandom($arr, $num){
    if($num > count($arr)){
	  $num = count($arr);
    } 
    $keys = array_rand($arr, $num);
    $values = array_map(function($k) use($arr){
	  return $arr[$k];
    }, $keys);
    return $values;
}
echo "<pre>";
print_r(pickrandom($planets, 2));
print_r(pickrandom($planets, 3));
print_r(pickrandom($planets, 2));
print_r(pickrandom($planets, 4));
print_r(pickrandom($planets, 5));
print_r(pickrandom($planets, 6));
echo "</pre>";

?>
</body>
</html>

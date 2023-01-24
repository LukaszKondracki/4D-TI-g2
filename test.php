<?php

$arr = [2, 45, 756, 12, 65, 87, 1];

// do-while
$count = 0;
do {
    echo $arr[$count] . ' ';
    $count++;
}
while ($count < count($arr));

echo '<hr>';

// while
$count = 0;
while ($count < count($arr)) {
    echo $arr[$count] . ' ';
    $count++;
}

echo '<hr>';

// for
for ($i = 0; $i < count($arr); $i++)
{
    echo $arr[$i] . ' ';
}

echo '<hr>';

// foreach               
foreach ($arr as $el) {  // foreach ($arr as $el):
    echo $el . ' ';      //     echo $el . ' ';
}                        // endforeach;

echo '<hr>';

// foreach KV
foreach ($arr as $key => $val) {
    echo "$key: $val<br>";
}

echo '<hr>';

// if/elseif/else
$num = 2;

if ($num > 9) {
    echo 'YES 9';
} elseif($num >= 5) {
    echo 'YES 5';
} else {
    echo 'NO';
}

echo '<hr>';

// switch
$num = 32;
switch ($num) {
    case 8:
        echo 'eight';
        break;
    case 7:
        echo 'seven';
        break;
    case 6:
        echo 'six';
        break;
    case 5:
    case 4:
    case 3:
    case 2:
        echo 'between five and two';
        break;
    default:
        echo "some other number: $num";
}

echo '<hr>';

// match
$num = 34;
echo match ($num) {
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4, 5, 6, 7 => 'between four and seven',
    default => "other number ($num)"
};

echo '<hr>';

// ternaries
$num = 12;
echo $num % 2 == 0 
        ? 'even ' 
        : 'odd ';

$var = false;
echo $var ?: 'default ';
// tożsame z
echo $var ? $var : 'default ';

echo '<hr>';

// null-operators
$var = null;
echo $var ?? 'default ';

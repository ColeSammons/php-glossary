<?php
$title = 'Functions'; // global
$greeting = 'Hello'; // global

function sum(int|float $a, int|float $b): int|float
{
    global $title, $greeting; // declaring global vars in function
    echo $title, $greeting;
    $result = $a + $b;
    return $result;
}


$result = sum(1, 2);

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$guitars = ['Vela', 'Explorer', 'Strat'];


$list_guitars = [
    ['name' => 'Vela', 'manufacturer' => 'PRS'],
    ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
    ['name' => 'Strat', 'manufacturer' => 'Fender']
];

$guitar_name = array_column($list_guitars, 'manufacturer');

// map. pluck is same as array_column
function pluck($arr, $key)
{
    $result = array_map(function($item) use($key) {
        return $item[$key];
    }, $arr);

    return $result;
}
$guitar_names = pluck($list_guitars, 'name');
output($guitar_names)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>

<body>
    <h1>
        <?= $title ?>
    </h1>
    <?= $result; ?>
    <?php
    output($guitars);
    output($guitar_name);
    ?>

</body>

</html>
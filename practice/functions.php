<?php
$title = 'Functions';

function sum(int | float $a, int | float $b): int | float {
    $result = $a + $b;
    return $result;
};

$result = sum(1,2);

function output($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
};

$guitars = ['Vela', 'Explorer', 'Strat'];

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
    ?>
   
</body>

</html>
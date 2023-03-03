<?php
$title = 'foreach loop';

$favorite_guitars = ['Vela', 'Explorer', 'Strat'];

$kvp_guitars = ['prs' => 'Vela', 'gibson' => 'Explorer', 'fender' => 'Strat'];
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
    <!-- traditional -->
    <table>
        <?php
        foreach ($favorite_guitars as $guitar) {
            echo "<tr><td>$guitar</td></tr>";
        }
        ?>
    </table>
    <br>
    <!-- associative -->
    <table>
        <?php
        foreach ($kvp_guitars as $key => $guitar) {
            echo "<tr><td>$key</td><td>$guitar</td></tr>";
        }
        ?>
    </table>
</body>

</html>
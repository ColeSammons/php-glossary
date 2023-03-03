<?php
$title = 'loops';

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
    <!-- traditional foreach -->
    <table>
        <?php
        foreach ($favorite_guitars as $guitar) {
            echo "<tr><td>$guitar</td></tr>";
        }
        ?>
    </table>
    <br>
    <!-- associative foreach -->
    <table>
        <?php
        foreach ($kvp_guitars as $key => $guitar) {
            echo "<tr><td>$key</td><td>$guitar</td></tr>";
        }
        ?>
    </table>
    <br>
    <!-- for loop -->
    <table>
        <?php
        for ($i = 0; $i < count($favorite_guitars); $i++) {
            $guitar = $favorite_guitars[$i];
            echo "<tr><td>$guitar</td></tr>";
        }
        ?>
    </table>
    <br>
    <!-- while loop -->
    <table>
        <?php
        $i = 0;
        while ($i < count($favorite_guitars)) {
            $guitar = $favorite_guitars[$i];
            echo "<tr><td>$guitar</td></tr>";
            $i++;
        }
        ?>
    </table>
</body>

</html>
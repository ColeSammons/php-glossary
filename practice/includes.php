<?php
$title = 'Includes';

include('./../inc/header.php');

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$guitars = ['Vela', 'Explorer', 'Strat'];

?>


<h1>
    <?= $title ?>
</h1>
<?php
output($guitars);
?>

</body>

</html>